<?php

namespace foo;

require 'aliased.php';

use My\Full\ClassName as Another;

new Another();
echo Another::class, PHP_EOL;

use const My\Full\TEST as T;

echo T, PHP_EOL;

use function My\Full\func as myFunc;

myFunc();
