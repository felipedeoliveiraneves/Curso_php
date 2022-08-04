<?php

$arr = [10,30,"25","felipe",1.993,"neves",2323,"1993",999,[],"novembro",2345];

$x = count($arr);
$y = 0;

while($y < $x){

    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }

    $y++;
    

}