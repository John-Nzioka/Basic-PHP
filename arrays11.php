<?php

//ARRAYS

   #indexed arrays

$programmingLanguages = ['PHP','Java','Python'];

echo $programmingLanguages[2];


print_r($programmingLanguages);

   #associative arrays

 $programmingLanguages1 = [

    'php' => '8.0',
    'python' => '3.9'
 ];
$newLanguage = 'C++';
 
$programmingLanguages1[$newLanguage] = '1.15';

print_r($programmingLanguages1);


   #multi-dimensional arrays

$programmingLanguages2 = [
 'php' => [
        'creator'      => 'Rasnus Lerdorf',
        'extension'    => '.php',
        'website'      => 'www.php.net',
        'isOpenSource' => true,
        'versions'     =>[
            ['version' => 8, 'realeaseDate' =>'November 26 2020'],
            ['version' =>7.4, 'releaseDate' =>'November 28 2019'],


  ],

],

 'python' => [
    'creator'         => 'Guido Van Rossum',
    'extension'       => '.py',
    'website'         => 'www.python.org',
    'isOpenSource'    => true,
    'versions'        =>[
        ['version'    => 3.9, 'realeaseDate' =>'October 05 2020'],
        ['version'    =>3.8, 'releaseDate' =>'October 14 2019'],
    
    ],  
 ],
];



print_r($programmingLanguages2);
echo $programmingLanguages2['python']['creator'];







   












?>