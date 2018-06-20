<?php

namespace my\stuff;

include 'ns-without-conflict1.php';
include 'ns-without-conflict2.php';

use another\Thing as MyClass;

$a = new MyClass();

var_dump($a);
