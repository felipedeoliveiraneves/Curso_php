<?php


class Humano {
    public $idade = 29;

    public function falar(){
        echo "Òla mundo! <br>";
    }

    private function gritar(){
        echo "PHP É MUITO BOM <br>";
    }

    public function acessaGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "hahahaha <br>";
    }

    public function acessafalarbaixinho(){
        $this->falarBaixinho();
    }      
}
class Programador extends Humano {

    public function acessafalarbaixinhoprogramador(){
        $this->falarBaixinho();
    }
   
}

$ze = new Humano;

$ze->falar();
$ze->acessaGritar();
$ze ->acessafalarbaixinho();

$felipe = new Programador;

$felipe->falar();
$felipe->acessaGritar();
$felipe->acessafalarbaixinhoprogramador();
