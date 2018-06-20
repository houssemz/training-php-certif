<?php

$a = 'new string';
xdebug_debug_zval('a');

$b = &$a;
xdebug_debug_zval('a');

$a = array('meaning' => 'life', 'number' => 42);
xdebug_debug_zval('a');
$a['life'] = $a['meaning'];
xdebug_debug_zval('a');
