<?php

//essa operação e "IDENTICO"
$nome = "felipe";
$nomeSistema = "felipe";

if($nome === $nomeSistema) {
    echo "Esse valor e IDÊNTICO! <br>";

}

//Essa operação e IGUAL
$id = 123;
$idsistem = "123";

if($id == $idsistem) {
    echo "Esse valor IGUAL! <br>";

}

//essa operação e DIFERENTE
if($id != $nome) {
    echo "Esse valor e DIFERENTE! <br>";

}

// Essa operação NÃO E IDENTICO
if($id !== $idsistem) {
    echo "Esse valor NÃO IDÊNTICO! <br>";
}