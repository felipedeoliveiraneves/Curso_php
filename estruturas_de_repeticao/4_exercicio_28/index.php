<?php

$a = 4;

while($a <= 30){

    echo $a . "<br>";
    if($a === 24){
        echo "Fim de loop <br>";
        break;
    }
    $a = $a + 2;

}