<?php
$a = [2, 4, 6, 8];
echo "sum(a) = " . array_sum($a) . "\n";

$b = ["a" => 1.2, "b" => 2.3, "c" => 3.4];
echo "sum(b) = " . array_sum($b) . "\n";

$sum = 0;

foreach ($b as $value){ //$a
    $sum += $value;
}
echo $sum;


