<?php

namespace NS {

    class Dynamic
    {
        public function __construct()
        {
            echo __METHOD__, PHP_EOL;
        }
    }
}

namespace {

    function func()
    {
        echo __METHOD__, PHP_EOL;
    }

    const CONST_NAME = 'global';

    $a = "\NS\Dynamic";
    new $a; // NS\Dynamic::__construct

    $b = 'func';
    $b(); // func

    echo constant('CONST_NAME'), PHP_EOL; // global
}
