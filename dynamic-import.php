<?php

namespace foo;

require 'aliased.php';

use My\Full\ClassName as Another;

new Another();
echo Another::class, PHP_EOL;

// Will not work
//$a = 'Another';
//new $a;

