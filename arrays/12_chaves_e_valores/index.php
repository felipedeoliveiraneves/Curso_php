<?php

$carro = [
    "marca" => "BMW",
    "motor" => "2.4",
    "teto_solar" => true,
    "cambio" => "Manual",
    "porta" => 4
];

$chave = array_keys($carro);

print_r($chave);
echo "<br>";

$valores = array_values($carro);

print_r($valores);

