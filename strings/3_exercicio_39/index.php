<?php


$lista = ["carro" => 1000,
        "sofa" => 350,
        "mesa" =>124,
        "cadeira" =>75,
        "lampada" => 9,
        "escova" => 5];

function listaPreco($valor) {

   $itenscaros = [];

   foreach($valor as $item => $preco) {
        if($preco > 10) {

            array_push($itenscaros, $item);
        }
   }
   return $itenscaros;
}

$lista2 = listaPreco($lista);

print_r($lista2);



