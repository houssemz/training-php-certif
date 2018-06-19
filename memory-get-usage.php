<?php

echo memory_get_usage(true) * 1e-6, " M", PHP_EOL;

$a = str_repeat("Hello!", 4242);

echo memory_get_usage(true) * 1e-6, " M", PHP_EOL;

unset($a);

echo memory_get_usage(true) * 1e-6, " M", PHP_EOL;
