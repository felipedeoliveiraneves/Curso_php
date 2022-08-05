<?php

$arr = [10,20,30,40,50,60,70,80,90,100];

$y = 0;

while($y < count($arr)){
    $numeroAtual = $arr[$y];

    if($numeroAtual == 30 || $numeroAtual == 40){
        $y++;
        continue;
    }
    echo "Elementos: $arr[$y] <br>";

    $y++;

}

