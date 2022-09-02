<?php

class Car {
    public $aros = 20;
    public $roda;
    public $cor = "vermelho";

    function ligar(){

        echo "vrummm <br>";
    }
}

$ferrari = new Car;

$ferrari -> roda = 4;

echo $ferrari -> roda . "<br>";
echo $ferrari -> aros . "<br>";

$ferrari -> cor = "azul";

echo $ferrari -> cor ;