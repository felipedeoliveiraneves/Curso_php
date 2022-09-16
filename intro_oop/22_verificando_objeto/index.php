<?php

class humano{
    public function falar(){
        echo "Ola <br>";
    }
}

$felipe = new humano;

$teste = 10;

if(is_object($felipe)){
    echo "E um objeto <br>";
}else{
    echo "Não e um objeto <br>";
}

if(is_object($teste)){
    echo "E um objeto <br>";
}else{
    echo "Não e um objeto <br>";
}

echo get_class($felipe) . "<br>";

if(method_exists($felipe, "falar")){
    echo "Metodo e existe <br>";
}else{
    echo "Metodo não existe <br>";
}

if(method_exists($felipe, "asd")){
    echo "Metodo e existe <br>";
}else{
    echo "Metodo não existe <br>";
}
