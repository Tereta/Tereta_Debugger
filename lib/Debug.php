<?php
/**
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░     ████████╗███████╗██████╗░███████╗████████╗░█████╗░    ░█████╗░██╗░░░░░███████╗██╗░░██╗░█████╗░███╗░░██╗██████╗░███████╗██████╗░       ░
 * ░     ╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗    ██╔══██╗██║░░░░░██╔════╝╚██╗██╔╝██╔══██╗████╗░██║██╔══██╗██╔════╝██╔══██╗       ░
 * ░     ░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║    ███████║██║░░░░░█████╗░░░╚███╔╝░███████║██╔██╗██║██║░░██║█████╗░░██████╔╝       ░
 * ░     ░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║    ██╔══██║██║░░░░░██╔══╝░░░██╔██╗░██╔══██║██║╚████║██║░░██║██╔══╝░░██╔══██╗       ░
 * ░     ░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║    ██║░░██║███████╗███████╗██╔╝╚██╗██║░░██║██║░╚███║██████╔╝███████╗██║░░██║       ░
 * ░     ░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝    ╚═╝░░╚═╝╚══════╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░╚══════╝╚═╝░░╚═╝       ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░      █████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗█████╗       ░
 * ░      ╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝╚════╝       ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 * ░                                                                                                                                           ░
 * ░        ░██╗░░░░░░░██╗░██╗░░░░░░░██╗░██╗░░░░░░░██╗░░░████████╗███████╗██████╗░███████╗████████╗░█████╗░░░░██████╗░███████╗██╗░░░██╗        ░
 * ░        ░██║░░██╗░░██║░██║░░██╗░░██║░██║░░██╗░░██║░░░╚══██╔══╝██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔══██╗░░░██╔══██╗██╔════╝██║░░░██║        ░
 * ░        ░╚██╗████╗██╔╝░╚██╗████╗██╔╝░╚██╗████╗██╔╝░░░░░░██║░░░█████╗░░██████╔╝█████╗░░░░░██║░░░███████║░░░██║░░██║█████╗░░╚██╗░██╔╝        ░
 * ░        ░░████╔═████║░░░████╔═████║░░░████╔═████║░░░░░░░██║░░░██╔══╝░░██╔══██╗██╔══╝░░░░░██║░░░██╔══██║░░░██║░░██║██╔══╝░░░╚████╔╝░        ░
 * ░        ░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░░░╚██╔╝░╚██╔╝░██╗░░░██║░░░███████╗██║░░██║███████╗░░░██║░░░██║░░██║██╗██████╔╝███████╗░░╚██╔╝░░        ░
 * ░        ░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░░░░╚═╝░░░╚═╝░░╚═╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝╚══════╝░░░╚═╝░░░╚═╝░░╚═╝╚═╝╚═════╝░╚══════╝░░░╚═╝░░░        ░
 * ░                                                                                                                                           ░
 * ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 *
 * See COPYING.txt for license details.
 * Copyright © 2020 Tereta Alexander. All rights reserved.
 * Contacts:
 *     tereta@mail.ua
 *     www.tereta.dev
 */

namespace Tereta;

use Exception;

/**
 * Tereta\Debug
 *
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
            $this->file = realpath(__DIR__ . '/..') . '/var/php_debugger.log';
        }

        return $this->file;
    }

    /**
     * \Tereta\Debug::init()->trace($var)
     *
     * @param string|null $label
     * @return string
     */
    public function trace(?string $label = null): string
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
        return $string;
    }

    /**
     * \Tereta\Debug()->dump($var)
     *
     * @param $var
     * @param int $deepArray
     * @return string|null
     */
    public function dump($var, int $deepArray = 3): ?string
    {
        $dumpValue = $this->varDumpTransform($var, $deepArray);
        $this->write("Variable : " . $dumpValue . "\n");
        return $dumpValue;
    }

    /**
     * @param array $params
     * @return string
     */
    public function info(array $params = []): string
    {
        $string = "";

        if (!$params) {
            $params = [
                'request_uri',
                'request_method',
                'post_data',
                'document_root',
                'script_file_name'
            ];
        }

        if (in_array('document_root', $params) && isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT']) {
            $string .= 'Document root : ' . $_SERVER['DOCUMENT_ROOT'] . "\n";
        }

        if (in_array('script_file_name', $params) && isset($_SERVER['SCRIPT_FILENAME'])) {
            $string .= 'Script file name : ' . $_SERVER['SCRIPT_FILENAME'] . "\n";
        }

        if (in_array('request_uri', $params) && isset($_SERVER['REQUEST_URI'])) {
            $string .= 'Request URI : ' . $_SERVER['REQUEST_URI'] . "\n";
        }

        if (in_array('request_method', $params) && isset($_SERVER['REQUEST_METHOD'])) {
            $string .= 'Request method : ' . $_SERVER['REQUEST_METHOD'] . "\n";
        }

        if (in_array('post_data', $params) && $_POST) {
            $string .= "Request POST data : \n" . json_encode($_POST, JSON_PRETTY_PRINT) . "\n";
        }

        $this->write("Info :\n" . $string);
        return $string;
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
                    $string .= $currentSpaces . 'var : ' . $key . ' => ' . $this->varDumpTransform($item, $deepArray - 1, $currentSpaces) . "\n";
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

function Debug()
{
    return Debug::init();
}