<?php

class Pessoa {

    function falar() {

        echo "Òla eu sou um objeto <br>";
    }
    function soma($a, $b) {

        echo $a + $b . "<br>";
    }

}

$felipe = new Pessoa;

$felipe ->falar();


$felipe2 = new Pessoa;

$felipe2 ->soma(2, 3);



