<?php

$raca = "Vira lata";
$nome = "Rukia";
$idade = "2";
$cor = "branca";

$turca = compact("raca", "nome", "idade", "cor");

print_r($turca);
echo "<br>";

foreach($turca as $caracteristica => $value) {

    echo "$caracteristica: $value <br>";
    
}