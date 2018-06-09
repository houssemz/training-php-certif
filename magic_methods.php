<?php

class Foo {
	private $prop = 'I have a content';

	public function __isset($name)
	{
		echo $name, PHP_EOL;
		return true;
	}
}

$foo = new Foo();

echo isset($foo->prop), PHP_EOL;
