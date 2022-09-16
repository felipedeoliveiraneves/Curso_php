<?php

$pessoa = new class(){

    public $nome = "Felipe";

    public function dizerNome(){
        echo "Óla meu nome e $this->nome <br>";
    }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();

