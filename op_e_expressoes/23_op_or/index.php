<?php

if(5 > 2 || 30 <4){  //true e true
    echo "A operação e verdadeira 1 <br>";
}

if(5 > 2 || 30 < 4 ) {    //true e false
    echo "A operação e verdadeira 2 <br>";
}

if(5 > 20 || 3 < 4) {   //false e true
    echo "A operação e verdadeira 3 <br>";
}

if(5 > 20 || 30 < 4) {  //false e false
    echo "A operação e verdadeira 4 <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if($a > $b || $d > $c) {  //false e true 
    echo "A operação e verdadeira 5 <br>";
}

if(($a > $b || $d > $c) && $c < $d) {
    echo "A operação e verdadeira 6 <br>";
}

if(($a > $b && $d < $c) || $c < $d) {
    echo "A operação e verdadeira 7 <br>";
}








