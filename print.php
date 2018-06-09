<?php

$a = 1;

$b = $a ? print 'hello': print 'salut';

$c = $a ? echo 'hello': echo 'salut'; // parse error !

echo PHP_EOL;
var_dump($b);

