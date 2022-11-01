<?php

/** funcparam */

declare(strict_types=1);

sleep(0);

function foo(int|float $x, int|float $y){

   return $x  *  $y ;

}

echo foo(5, 10.5);