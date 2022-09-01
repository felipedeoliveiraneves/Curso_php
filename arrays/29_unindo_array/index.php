<?php

$arr1 = [1, 2, 4, 56, 6];
$arr2 = [12, 34, 56, 879, 9, 00];
$arr3 = [98, 48, 72, 76, 98, 15];
$arr4 = ["Felipe", "oliveira", "Neves"];

$arrayMage = array_merge($arr1, $arr2, $arr3, $arr4, [1.0]);

print_r($arrayMage);
echo "<br>";


