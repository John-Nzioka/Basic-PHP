<?php

// while
$i = 0;
while ($i <= 20) {
    echo $i++;
}

// do-while

$x = 0;
do{
    echo $x++;
}while  ($x <= 15);

// for

$y = 0;
for ($y=0; $y <=15 ; $y++) { 
    echo $y;
}

// foreach

$programmingLanguages = ['PHP','Java','C++','Go','rust'];

foreach ($programmingLanguages as $language) {
    echo $language . '<br />';
}