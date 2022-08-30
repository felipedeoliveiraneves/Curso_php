<?php

$arr = [
    "felipe" => 29,
    "joyce" => 27,
    "fernanda" => 34,
    "fabricia" => 38
];

asort($arr);

print_r($arr);
echo "<br>";

$arr2 = [
    "felipe" => 29,
    "joyce" => 27,
    "fernanda" => 34,
    "fabricia" => 38
];

arsort($arr2);

print_r($arr2);
echo "<br>";

ksort($arr2);

print_r($arr2);
echo "<br>";

krsort($arr2);

print_r($arr2);
echo "<br>";



