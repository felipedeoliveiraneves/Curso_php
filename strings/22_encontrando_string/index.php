<?php

$str = "Estamos testando o metodo strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");

echo "$testeEncontrar <br>";

$testeEncontrar2 = strpos($str, "java");

echo"$testeEncontrar2 <br> ";

if($testeEncontrar2 === false) {
    echo "Palavra não encontra <br>";

}

$palavra = "com";
$testeEncontra3 = strpos($str, $palavra);

echo "$testeEncontra3 <br>";

$palavra2 = "to";
$testeEncontra4 = strpos($str, $palavra);

echo "$testeEncontra4 <br>";


