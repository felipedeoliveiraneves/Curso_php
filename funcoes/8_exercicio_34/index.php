<?php

function verificador($num) {

    if($num % 2 === 0 ) {
        echo "O numero $num é par <br>";
    }else{
        echo "O numero $num é impar <br>";  
    }
}
verificador(24);
verificador(33);
verificador(10);
verificador(25);