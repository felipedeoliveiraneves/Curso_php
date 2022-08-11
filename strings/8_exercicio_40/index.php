<?php

$str = "O rato roeu a roupa do rei de roma";

$contadorDeAs = 0;

for($y = 0; $y < strlen($str); $y++) {

    if($str[$y] === "a") {
        $contadorDeAs++;

    }

}

echo "O numero de a´s na frase é de : $contadorDeAs";
