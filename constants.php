<?php

/*
define(CONST_1, 1);
const CONST_2 = 2;

var_dump(CONST_1, CONST_2);


echo PHP_EOL;

echo __FILE__, PHP_EOL;
echo __DIR__, PHP_EOL;
echo dirname(__DIR__, 2), PHP_EOL;

echo PHP_EOL;
 */
 namespace FOO;

class Bar 
{
	public function getMyNS()
	{
		echo __NAMESPACE__, PHP_EOL;
	}
}

(new Bar())->getMyNS();

echo Bar::class, PHP_EOL;
