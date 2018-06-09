<?php
// Ne fonctionne pas, évalué comme include(('vars.php') == TRUE), i.e. include('')
if (include ('vars.php') == true) {
    echo 'OK';
}

// Fonctionne
if ((include 'vars.php') == true) {
    echo 'OK';
}

####################################################################################

$foo = include 'return.php';

echo $foo; // affiche 'PHP'

$bar = include 'noreturn.php';

echo $bar; // affiche 1

/////////////////////////////////////////////////////////////

###################### file.php ###############################
//<?php
//
//return 'hello';
//
//function foo()
//{
//    return 'I am foo function';
//}

$return = include 'file.php';

echo $return, PHP_EOL;

echo foo(), PHP_EOL;