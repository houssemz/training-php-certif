<?php

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}

var_dump($arr);

foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}


$array = [
    [1, 2],
    [3, 4]
];

foreach ($array as list($a, $b)) {
    echo $a, ' -- ', $b, PHP_EOL;
}
