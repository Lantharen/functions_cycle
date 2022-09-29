<?php
$a = array('green','red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
$k = [];
//print_r($c);

for ($i = 0;$i < count($a);$i++) {
    //$key => value
    //green => avocado;
    $k[$a[$i]] = $b[$i];
}

print_r($k);
?>
