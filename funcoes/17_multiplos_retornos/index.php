<?php

function alterarDados($nome, $idade) {

    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];

}

$dados = alterarDados("Felipe", 29);

print_r($dados);

echo "<br>";

echo "Olá $idade[0], você  tem $dados[1]";
