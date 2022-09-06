<?php

class animal{
    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    } 

    function latir(){
        return "au au  <br>";
    }

    function latirforte(){
        return strtoupper($this->latir());
    }

}

$frida = new animal;

echo "o nome do animal é: $frida->nome  <br>";

$frida ->escolherNome("frida");

echo "O nome do animal é : $frida->nome <br>";

echo  $frida ->latir();
echo $frida ->latirforte();
