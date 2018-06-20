<?php

$a = [
    'a' => 'apple',
    'b' => 'banana',
];

$b = [
    'a' => 'pear',
    'b' => 'strawberry',
    'c' => 'cherry',
];

$c = $a + $b;
$d = $b + $a;

var_dump($c, $d);


// Elements of arrays are equal for the comparison if they have the same key and value.
$a = ['apple', 'banana'];
$b = [1 => 'banana', '0' => 'apple'];

var_dump($a, $b, $a == $b, $a === $b);

var_dump($a + [0 => 'pear', 1 => 'cherry']);


var_dump($a + ["hello", "world", "php"]);
var_dump($b + ["hello", "world", "php"]);
