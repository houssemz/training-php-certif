<?php

$i = 1;
while ($i <= 10) {
    echo "-- $i --", PHP_EOL;
    echo $i++, PHP_EOL;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}
