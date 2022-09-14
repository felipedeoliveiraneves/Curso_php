<?php


class Humano {

}
class Animal{

}
class Professor extends Humano{

} 

$felipe = new Humano;
$rukia = new Animal;

if($felipe instanceof Humano){
    echo "Felipe e um humano <br>";
}else{
    echo "Felipe não e um humano <br>";
}

if($rukia instanceof Humano){
    echo "Rukia e uma humana <br>";
}else{
    echo "Rukia não e uma humana  <br>";
}

$pedro = new Professor;


if($pedro instanceof Professor){
    echo "Pedro e um professor <br>";
}else{
    echo "Pedro não e um professor <br>";
}

if($pedro instanceof Humano){
    echo "Pedro e um humano <br>";
}else{
    echo "Pedro não e um humano <br>";
}

if($rukia instanceof Professor){
    echo "Rukia e uma professora <br>";
}else{
    echo "Rukia não e uma professora <br>";
}
