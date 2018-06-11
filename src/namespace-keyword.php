<?php

namespace bar;

require 'foo/Xyz.php';
require 'bar/Xyz.php';

use foo\Xyz;
use foo\abc;


$x = new Xyz();

$y = new namespace\Xyz();

$z = abc();

$u = \foo\abc();

var_dump($x, $y, $z, $u);


