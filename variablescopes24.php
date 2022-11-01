<?php

/** variable scopes */

$x = 5 ;

function foo() {

   echo $GLOBALS['x'] = 10 ;

   echo $GLOBALS['x'];

}
foo();

echo $x;

?>