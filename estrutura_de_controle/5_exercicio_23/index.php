<?php

$idade1 = 16;
$idade2 = 18;
$idade3 = 29;

$msg = "É maior de idade <br>";
$msg2 = "É menor de idade <br>";

$maiorIdade = 18;

if($idade1 > $maiorIdade) {
    echo $msg;

}else {
    echo $msg2;

}

if($idade2 >= $maiorIdade) {
    echo $msg;

}else {
    echo $msg2;

}

if($idade3 >= $maiorIdade) {
    echo $msg;

}else {
    echo $msg2;
    
}