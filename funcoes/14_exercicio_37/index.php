<?php

/*function defineCorCarro($acor , $cor = "vermelha"){

    echo "A ferarre e de cor $cor mais deveria ser da cor $acor <br>";

}

defineCorCarro("preta"); */

function definecorcarro($cor = "vermelha") {

    return "A cor do carro é: $cor";

}

$carrovermelho = definecorcarro();
echo $carrovermelho . "<br>";

$carroazul = definecorcarro("azul");
echo $carroazul . "<br>";

