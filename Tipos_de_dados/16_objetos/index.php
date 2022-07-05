<?php

class pessoa {

    function falar() {
        echo "Ola pessoal !";
    }

}

$felipe = new pessoa();

$felipe ->nome = "felipe";
echo $felipe -> nome;

echo "<br>";

$felipe -> falar();
