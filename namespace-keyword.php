<?php
namespace foo;

class Xyz
{
}
function abc()
{
}
?>

<?php

namespace bar;

class Xyz
{
}
function abc()
{
}
?>

<?php

namespace bar;

use foo\Xyz;
 use foo\abc;

 $x = new Xyz();
var_dump($x);
