<?php

$a = 50;
$b = "50";

if(is_int($a) || is_float($a)) {
    
    $multi1 = $a * 2;

    if($multi1 > 100 ) {
        echo "Onumero e maior que 100 <br>";

    }else {
        echo "O numero não e maior que 100 <br> ";

    }

}else {
    echo "Não e um numero <br>";

}

if(is_int($b) || is_float($b)) {
    
    $multi1 = $b * 2;

    if($multi1 > 100 ) {
        echo "Onumero e maior que 100 <br>";

    }else {
        echo "O numero não e maior que 100 <br> ";

    }

}else {
    echo "Não e um numero <br>";

}