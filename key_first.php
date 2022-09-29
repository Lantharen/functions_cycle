<?php
$array = ['a' => 1, 'b' => 2, 'c' => 3];

$firstKey = array_key_first($array);

//var_dump($firstKey);

$i = 0;

foreach ($array as $key => $value){
    if ($i === 0) var_dump($key);
    $i++;
}



?>
