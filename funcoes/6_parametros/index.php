<?php

function velocidade($vel) {
    //echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    if(is_int($vel)) {
        echo "O carro atinge a velocidade maxima de $vel km/h <br>";
    } else {
        echo "Por favor, passa um numero inteiro <br>";
    }
}
velocidade(2.3);

// Não pode 
// velocidade();

echo "Teste continuando <br>";

$velo = 125;

velocidade($velo);

// PHP ignora parãmetro desnecessario 
velocidade(230, "teste");

//mais parametro
function animais($nome,$raca) {

    echo "O $nome é da raça $raca <br>";

}

animais("Rukia", "gata");
animais("mel", "gata");

//poucos parametro 
//animais("simba");




