<?php

 error_reporting(E_ALL);

$info = ['coffee', 'brown', 'caffeine'];

list($a, $b, $c) = $info;
// var_dump($a, $b, $c);
// var_dump($info);
// exit();

list($drink, , $power) = $info;
var_dump($drink, $power);

list($hello) = 'hello';
var_dump($hello);


$foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');

var_dump($foo);

$foo[1] = 'd';

var_dump($foo);

list($x, $y, $z) = $foo;

var_dump($x, $y, $z);

$arr = [1, 2];
list($l, $m, $n) = $arr;

var_dump($l, $m, $n);
