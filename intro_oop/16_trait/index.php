<?php

trait objeto{
    public function teste(){
        echo "Testando o trait de objeto <br>";
    }

}

trait Testando{
    public $y = 10;
    public function traitTestando(){
        echo "Essse metodo e da trait testando <br>";
    }
}

class central{
    use objeto;
    use Testando;

}

$x = new central;

$x->teste();
$x->traitTestando();

echo $x->y .  "<br>";
