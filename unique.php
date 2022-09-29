<?php
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];
//print_r($input);

//$result = array_unique($input);
//print_r($result);

$unique = [];
foreach ($input as $key => $value){
    if (!in_array($value, $unique)){
        $unique[$key] = $value;
    }

}

print_r ($unique);

?>
