<?php
namespace Tereta;

use Exception;

/**
 * Class Debug
 */
class Debug
{
    /**
     * @var self
     */
    protected static $self;

    /**
     * @var string
     */
    protected $file;

    /**
     * @return Debug
     */
    public static function init()
    {
        if (static::$self) {
            return static::$self;
        }
        return static::$self = new self;
    }

    /**
     * @param string $file
     * @return $this
     */
    public function setFile(string $file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFile(): ?string
    {
        if (!$this->file) {
            $this->file = '/tmp/php_debugger.log';
        }

        return $this->file;
    }

    /**
     * @param string|null $label
     */
    public function trace(?string $label = null)
    {
        $string = '';
        if ($label) {
            $string .= $label . " :\n";
        }
        try {
            throw new Exception;
        } catch (Exception $e) {
            $string .= $e->getTraceAsString();
        }

        $this->writeLn($string);
    }

    /**
     * @param $var
     * @param int $deepArray
     */
    public function varDump($var, $deepArray = 3): void
    {
        $this->write("Variable : " . $this->varDumpTransform($var, $deepArray) . "\n");
    }

    /**
     * @param $var
     * @param int $deepArray
     * @param string $spaces
     * @return string
     */
    protected function varDumpTransform($var, int $deepArray = 0, string $spaces = ''): string
    {
        $string = "";
        if (in_array(gettype($var), ['integer'])) {
            $string .= '(' . gettype($var) . ') ' . $var;
        } elseif (in_array(gettype($var), ['integer', 'string'])) {
                $string .= '(' . gettype($var) . ') "' . $var . '"';
        } elseif (in_array(gettype($var), ['null'])) {
            $string .= '(' . gettype($var) . ')';
        } elseif (in_array(gettype($var), ['object'])) {
            $string .= '(' . gettype($var) . ') ' . get_class($var) . " [\n";
            $currentSpaces = $spaces . '    ';
            foreach (get_class_vars(get_class($var)) as $key => $item) {
                if ($deepArray > 0) {
                    $string .= $currentSpaces . 'var : ' . $key . " => ...\n";
                } else {
                    $string .= $currentSpaces . 'var : ' . $key . ' => ' . $this->varDumpTransform($item, $deepArray - 1) . "\n";
                }
            }
            foreach (get_class_methods($var) as $key => $item) {
                $string .= $currentSpaces . 'method : ' . $item . "(...)\n";
            }
            $string .= $spaces . "]\n";
        } elseif (in_array(gettype($var), ['array']) && $deepArray > 0) {
            $string .= '(' . gettype($var) . ') [' . "\n";
            $currentSpaces = $spaces . '    ';
            foreach ($var as $key => $item) {
                if (is_string($key)) {
                    $key = '"' . $key . '"';
                }
                $string .= $currentSpaces . $key . ' => ' . $this->varDumpTransform($item, $deepArray - 1, $currentSpaces) . "\n";
            }
            $string .= ']';
        } elseif (in_array(gettype($var), ['array'])) {
            $string .= '(' . gettype($var) . ') [...]';
        } else {
            $string .= '(' . gettype($var) . ") ...";
        }

        return $string;
    }

    /**
     * @param string $string
     */
    public function writeLn(string $string): void
    {
        $this->write($string . "\n");
    }

    /**
     * @param string $string
     */
    public function write(string $string): void
    {
        file_put_contents($this->getFile(), $string, FILE_APPEND);
    }
}