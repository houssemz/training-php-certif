<?php

namespace Foo;

try {

    // something that will throw an exception
} catch (\Exception $exception) {
    // without the "\", we will never get here
    // This is because we are catching Foo\Exception
}
