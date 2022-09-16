<?php

abstract class teste{
    public static function testandoClasse(){
        echo "Esse metodo e de uma classe abstrata <br>";
    }
    abstract public function testeAbs();
}

//$x = new teste;

teste::testandoClasse();

class nova extends teste{

    public function testeAbs(){
        echo "teste metodo abstrato <br>";
    }
}

$n = new nova;
$n->testeAbs();