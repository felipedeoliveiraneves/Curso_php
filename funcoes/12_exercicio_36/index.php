<?php

$arr = [];
for($i = 0; $i <= 30; $i++){
    array_push($arr, $i);
}

function contagen($array) {
     
    $arrayretorno = [];

    for($j = 0; $j < count($array); $j++){

        if($array[$j] > 7) {
            array_push($arrayretorno, $array[$j]);
        }
    }
    return $arrayretorno;
}

$novoarray = contagen($arr);

print_r($novoarray);
