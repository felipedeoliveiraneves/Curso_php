<?php

class Humano{

    public function nome(){
        echo "ÓLA MEU NOME E FELIPE <br>";
    }

    private function idade(){
        echo "EU TENHO 29 ANOS <br>";
    }
    public function acessoidade(){
        $this->idade();
    }
    protected function profissao(){
        echo "EU ESTOU ESTUDANDO PARA SE UM PROGRAMADOR <br>";
    }
    public function acessoprofissao(){
        $this->profissao();
    }
}

class Professor extends Humano{

    public function boasvinda() {
        echo "BEM VINDO AO MAGICO MUNDO DA PROGRAMAÇÃO <br>";
    }
}

$felipe = new Professor;

$felipe->nome();
$felipe->acessoidade();
$felipe->acessoprofissao();
$felipe->boasvinda();
