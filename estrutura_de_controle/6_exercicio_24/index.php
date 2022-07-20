<?php

$a = "teste";
$b = 25;
$c = [];

$x = "É inteiro <br>";
$y = "Não e inteiro <br>";

if(is_int($a) ) {
    echo $x;

}else {
    echo $y;

}
 
if(is_int($b)) {
    echo $x;

}else {
    echo $y;

}

if(is_int($c)) {
    echo $x;

}else {
    echo $y;

}