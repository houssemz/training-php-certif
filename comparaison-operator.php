<?php

$a = 123;
$b = "123";

$x = ($a == $b);

echo $a == $b, PHP_EOL;  // 1
echo $x, PHP_EOL; // 1

var_dump($a == $b, $x); // true, true


// Stict comparaison
$y = ($a === $b);

echo $a === $b, PHP_EOL;  // vide !!
echo $y, PHP_EOL; // vide et vide  !!

var_dump($a === $b, $y); // flase et false !

$z = ('123a' == 123);
var_dump($z, '123a' == 123); // true !
