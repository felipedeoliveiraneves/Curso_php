<?php

if(10 > 2) {
    echo "entrou no primerio if <br>";

    if("teste" == "teste") {

        echo "entro no segundo if <br>";

    }

}

if(10 > 2) {
    echo "entrou no primerio if <br>";

    if("teste" != "teste") {

        echo "entro no segundo if 2 <br>";

    }else {
        echo "entrou no segundo else 2 <br>";

    }

}

if(10 < 2) {
    echo "entrou no primerio if <br>";

    if("teste" != "teste") {

        echo "entro no segundo if 2 <br>";

    }else {
        echo "entrou no segundo else 2 <br>";
        
    }

}else {
    echo "entrou no primero else <br>";

}

$escopo = 10;

if(10 > 2) {
    echo "entrou no primerio if <br>";

    $escopo2 = 20;

    if("teste" == "teste") {

        echo "entro no segundo if 2 <br>";
        echo $escopo;
        echo " " . $escopo2;
        
    }else {
        echo "entrou no segundo else 2 <br>";
        
    }

}else {
    echo "entrou no primero else <br>";

}


