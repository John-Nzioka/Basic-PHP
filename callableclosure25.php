<?php

/* variable, anonymous & arrow functions */

    #variable functions
       
function sum(int|float ...$numbers): int|float {

    return array_sum($numbers);
}

$x = 'sum';

if (is_callable($x)) {
    echo $x(1, 2, 3, 4);
}else {
    echo 'Not Callable';
}

  
   #anonymous functions => functions with no name

   function (int|float ...$numbers): int|float {

    return array_sum($numbers);
}; //ends with a semi-colon

$x = 'sum';

if (is_callable($x)) {
    echo $x(1, 2, 3, 4);
}else {
    echo 'Not Callable';

}

    #callable and call-back functions

$array = [1, 2, 3, 4] ;

$array2 = array_map(function($element) {

  return $element * 2;

}, $array);

echo '<pre>';
print_r($array);

print_r($array2);

//echo '</pre>';
     


  #arrow function

  $array = [1, 2, 3, 4];

  $array2 = array_map(fn($number) => $number * $number, $array);

  print_r($array2);