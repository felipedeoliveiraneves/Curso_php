<?php

class carro{

    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setvelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }
    function getvelocidadeMaxima(){
       echo "Ò carro tem a velocidade maxima de : $this->velocidadeMaxima Km/h <br>";
    }

}

$bmw = new carro;

$bmw->cor = "vermelho";
$bmw->tetoSolar = true;

$bmw->setvelocidadeMaxima(200);

$bmw->getvelocidadeMaxima();



