<?php
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

echo '<pre>';
print_r($input);
echo '</pre>';
echo '<pre>';
print_r($reversed);
echo '</pre>';
echo '<pre>';
print_r($preserved);
echo '</pre>';

$_reversed = [];

//for ($i = 0; $i < count($input);$i++)
//$k = 0;
/*for ($i = count($input)-1;$i >= 0; $i--){
    $_reversed[$k] = $input[$i];
    $k++;
}*/
for ($i = 0; $i < count($input); $i++) {
    $_reversed[$i] = $input[count($input)-1-$i];
}

echo 'NAW<pre>';
print_r($_reversed);
echo '</pre>';
$_reversed = [];


for ($i = count($input)-1;$i >= 0; $i--){
    $_reversed[$i] = $input[$i];
}

echo 'NAW<pre>';
print_r($_reversed);
echo '</pre>';
?>
