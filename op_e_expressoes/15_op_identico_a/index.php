<?php

if(5 == "5") {
    echo "5 é 5 1<br>";

}

//op de identico
if(5 === "5") {
    echo "5 é 5 2<br>";

}

if(5 === 5) {
    echo "5 é 5 3<br>";

}

if(3 === "teste") {
    echo "É igual <br>";

}

$a = 17;
$b = 17;
$c = "17";

if($a === $b) {
    echo "e true <br>";

}

if($b === $c){
    echo "E false <br>";

}