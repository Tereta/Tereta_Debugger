<?php
require(__DIR__ . '/../lib/Debug.php');

var_dump(Tereta\Debug::init()->getFile());
Tereta\Debug::init()->varDump(['1', 2, 'Hell', Tereta\Debug::init(), 'varKey' => 'varValue']);
function test(){
    Tereta\Debug::init()->trace();
}

test();