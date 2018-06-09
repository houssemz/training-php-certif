<?php


$str = 'echo "In PHP mode!", PHP_EOL; ?>In HTML mode!<?php echo PHP_EOL, "Back in PHP mode!";';

$res = eval($str);

var_dump($res);
