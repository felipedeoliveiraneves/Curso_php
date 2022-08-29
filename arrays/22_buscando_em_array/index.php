<?php

$arr = ["banana", "maçã", "batata", "pera", "mamão"];

if(in_array("banana",$arr)) {
    echo "Ha banana no array <br>";
}else{
    echo "Não ha banana no array <br>";
}

$a = "batata";

if(in_array($a, $arr)) {
    echo "Há batata no array <br>";
}else{
    echo "Não a batata no array <br>";
}

if(in_array("teste", $arr)) {
    echo "Há teste no array <br>";
}else{
    echo "Não há teste no array <br>";
}

