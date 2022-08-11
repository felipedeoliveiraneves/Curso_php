<?php

$frase1 = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";
$frase3 = "testando o case de uma palavra <br>";

//primrira letra em maiusculo
echo ucfirst($frase1);
echo ucfirst($frase2);

//Todas as palavras com as iniciais maiusculas
echo ucwords($frase3);
echo ucwords($frase2);
