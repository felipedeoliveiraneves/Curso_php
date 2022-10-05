<?php
class cachorro{

    public $raca;
    public $cor;
    public $idade;
    
    function __construct($raca, $cor, $idade){
        
        $this->raca = $raca;
        $this->cor = $cor;
        $this->idade = $idade;
    }
}

$sinba = new cachorro("viralata", "marron", 7);

echo $sinba->raca . "<br>";
echo $sinba->cor . "<br>";
echo $sinba->idade . "<br>";