<?php

$x = 0;
$y = (int)null;

var_dump(
    $x == null,
    is_null($x),
    $y,
    "false" == true,
    new stdClass() == true
);
