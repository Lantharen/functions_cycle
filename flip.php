<?php

$input = ["oranges", "apples", "pears"];
$flipped = array_flip($input);

$_flipped = [];

//print_r($flipped);

foreach ($input as $key => $value){
       $a = $key;
       $key = $value;
       $value = $a;
       $_flipped[$key] = $value;
}
print_r($_flipped);

//$a = 'a';
//$b = 'n';

//$c = $a;
//$a = $b;
//$b = $c;

