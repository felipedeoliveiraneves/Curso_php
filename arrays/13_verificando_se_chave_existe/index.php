<?php

$arr = [
    "nome" => "Felipe",
    "idade" => 29
];

if(array_key_exists("nome", $arr)){
    echo "A chave existe! <br>";
}else{
    echo "A chave não existe! <br>";
}

if(array_key_exists("profissao", $arr)){
    echo "A chave existe! <br>";
}else{
    echo "A chave não existe! <br>";
}

if(isset($arr["nome"])) {
    echo "A achave existe! ISSET <br>";

}else {
    echo "A chave não existe! ISSET <br>";
}

if(isset($arr["teste"])) {
    echo "A achave existe! ISSET <br>";
    
}else {
    echo "A chave não existe! ISSET <br>";
}

$x = 10;

if(isset($x)) {
    echo "O var existe ISSET <br>";

}else{
    echo "O var não existe ISSE <br>";

}

