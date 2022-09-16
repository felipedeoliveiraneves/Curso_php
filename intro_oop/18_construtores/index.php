<?php

class car{
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca){
        
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca; 
    }
}

$ferrari = new car(4, "vermelha", "Ferrari");

echo "O carro e da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

$bmw = new car(4, "preta", "BMW");

echo "O carro e da marca $bmw->marca e tem a cor $bmw->cor <br>";