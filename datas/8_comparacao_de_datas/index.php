<?php

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);

if($dataB > $dataA){
    echo "A data B e maior que a A <br>";
}
if($dataB > $dataA){
    echo "A data A e maior que a B <br>";
}
if($dataC == $dataB){
    echo "As data B e C são iguais <br>";
}