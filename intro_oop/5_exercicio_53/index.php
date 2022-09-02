<?php

class Cachorro {

    function latir(){

        echo "Ò cachorro esta latindo muito <br>";

    }

    function andar($m){

        echo "Ò cachorro esta andando la fora e andou $m <br>";

    }
}

$hex = new Cachorro;

$hex -> latir();
$hex -> andar(123);
