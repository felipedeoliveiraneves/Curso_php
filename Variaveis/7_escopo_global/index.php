<?php

$teste = "asd";

echo "$teste global 1 <br>";


if(5>2) {
    $teste = "dsa";

    echo "$teste if <br>";

}

echo "$teste global 2 <br>";


function  funcao() {

    $teste = "felipe";

    echo " $teste  local 2 <br> ";

}

funcao();

function testandoglobal () {

    global $teste;

    $teste = 2;

    echo "$teste global função <br>";

}

testandoglobal();

echo "$teste global 3 <br>";