<?php

class humano{
    public const OLHOS = 2;
    public const PERNAS = 2;
    public const BRACOS =2;

    function mostrarConstante(){
        echo self::BRACOS;
    }
}

$felipe = new humano;

echo $felipe::OLHOS . "<br>";

echo $felipe->mostrarConstante();

