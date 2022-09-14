<?php

interface caracteristica{
    const nome = "Felipe";
    public function falar();
}

class humano implements caracteristica{
    const idade = 29;

    public function falar(){
        echo "Óla mundo <br>";
    }
    public function dizerNome(){
        echo "Meu nome é" . self::nome . "<br>";
    }

}

$felipe = new Humano ;
$felipe->falar();
$felipe->dizerNome();

