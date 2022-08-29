<?php

$arr = [1, 2, 4, 19, 45, 89, 123, 875];

function soma($a,$b){
    return $a + $b;
}

function subtracao($a, $b){
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

$resultado2 = array_reduce($arr, "subtracao");

echo "$resultado <br>";
echo "$resultado2 <br>";
