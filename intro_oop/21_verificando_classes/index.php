<?php


class humano{
    public $idade;
    public $nome;
    public $profissao;

    public function andar(){}

    public function falar(){}
}

if(class_exists("humano")){
    echo "A classe existe <br>";
}
if(class_exists("cachorro")){
    echo "A classe existe <br>";
}else{
    echo "A classe não existe <br>";
}

print_r(get_class_vars("humano"));

print_r(get_class_methods("humano"));
