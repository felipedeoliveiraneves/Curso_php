<?php

$felipe = [
    'nome' => 'Felipe',
    'idade'=> 29,
    'profissao' => 'Programador'
];

$alexia = [
    'nome' => 'Alexia',
    'idade' => 25,
    'profissao' => 'Eng. civil'
];

foreach($felipe as $carac => $value) {
    echo "$carac => $value <br>";

}

foreach($alexia as $value){
    echo "$value <br>";

}