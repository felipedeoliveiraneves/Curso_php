<?php



class Pessoa {
    
    public $nome;
    public $idade;

    function andar($m)  {
        echo "felipe andou: $m metros <br>";
    }
}

$felipe = new pessoa;

echo $felipe ->nome = "Felipe <br>";
echo $felipe ->idade = 29 . "<br>";

$felipe -> andar(450);