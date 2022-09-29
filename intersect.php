<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
//print_r($result);


$array3 = [];

foreach ($array1 as $key => $item) {
    foreach ($array2 as $key1 => $value){
        if ($item == $value){
            $array3[$key] = $value;
        }
    }

}
print_r($array3);


//massiv[KLYUCH] = ZNACHENIE;






?>
