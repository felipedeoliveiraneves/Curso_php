<?php

echo 5 / 2;
echo "<br>"; 

if(is_float(5/2)){
    echo "É um float <br>";

}

echo 2 . 3;
echo "<br>";

if(is_string(2.3)) {

    echo "É uma string <br>";

}

$nome = "Felipe";
$sobreNome = "Oliveira";

$nomeCompleto = $nome . " " . $sobreNome;

echo $nomeCompleto;
echo "<br>";
