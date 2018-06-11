<?php

namespace NS;

define('C', "I am a constant");
const A = "I am a letter";

echo __NAMESPACE__, PHP_EOL;
echo namespace\A, PHP_EOL;
echo namespace\C, PHP_EOL;
