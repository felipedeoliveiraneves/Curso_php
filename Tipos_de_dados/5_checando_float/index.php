<?php

$a = "teste";
$b = 12.8;

if(is_float($a)) {
    echo "e float!";
}

if(is_float($b)) {
    echo "e float!";
}

if(is_float(456.9)) {
    echo "e float!<br>";
}

if(is_float("teste")) {
    echo "e float!4<br>";
}

