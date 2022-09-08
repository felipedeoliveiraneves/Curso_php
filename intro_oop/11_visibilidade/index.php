<?php

use Car as GlobalCar;

class Car{

    public $roda = 4;
    private $vidro = "sem pelicula";
    protected $portas = 4;

    public function getVidro(){
        return $this->vidro;
    }
    public function getPortas() {
        return $this->portas;  
    }
}
class mecanico{

    public function alterarRoda($carro){
        $carro->roda = 10;
    }

    public function colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->roda . "<br>";

$felipe = new mecanico;

$felipe->alterarRoda($carro);

echo $carro->roda . "<br>";

//$felipe -> colocarPelicula($carro, "G20");

echo $carro->getVidro() . "<br>";

//$carro->vidro = "teste";

echo $carro->getPortas();




