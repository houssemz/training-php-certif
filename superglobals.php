<?php

$a = '$GLOBALS["a"]';

function foo()
{
	global $a;
	echo $$a;
}

echo $GLOBALS["a"], PHP_EOL;

echo ${$a};

// foo();
