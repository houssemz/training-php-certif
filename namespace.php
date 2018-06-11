<?php

namespace my\name;

class Space
{
}

function func($arg)
{
    return $arg;
}

const MY_CONST = 1;

$a = new Space();

var_dump($a);
var_dump(Space::class);

$c = new \my\name\Space; // full namespace
var_dump($c);


$str = strlen("hello");
echo $str, PHP_EOL;

$d = __NAMESPACE__ . "\\"  . MY_CONST;
var_dump($d);

var_dump(namespace\MY_CONST);
