<?php

function foo()
{
	global $color;
	include 'vars.php';
	echo $color, PHP_EOL;
	echo $fruit, PHP_EOL;
}


foo();
echo $color, PHP_EOL;
echo $fruit, PHP_EOL;

