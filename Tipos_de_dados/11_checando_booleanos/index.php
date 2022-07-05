<?php

$a = true;

if (is_bool($a)) {
    echo "e verdadeiro! <br>";
}

if(is_bool(0)) {
    echo "e verdadeiro <br>";
}

if (is_bool(false)) {
    echo "e verdadeiro 3 <br>";
}

if(0 == false) {
    echo "0 e considerado falso! <br>";
}