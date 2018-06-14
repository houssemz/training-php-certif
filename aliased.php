<?php

namespace My\Full;

class ClassName
{
    public function __construct()
    {
        echo __METHOD__, PHP_EOL;
    }
}

const TEST = 0;

function func()
{
    echo __FUNCTION__, PHP_EOL;
}