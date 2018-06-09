<?php

$x = 0;
$y = (int)null;

var_dump(
	$x == null,
	is_null($x),
	$y,
	"false" == TRUE,
	new stdClass() == true
);
