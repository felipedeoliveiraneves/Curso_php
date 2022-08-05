<?php

$arr = [];

for($y = 10; $y <= 20; $y++){
    array_push($arr,$y);
   
}
print_r($arr);

for($y = 0; $y < count($arr); $y++){

    if($arr[$y] % 2 != 0){
        echo "Numeros impar: $arr[$y] <br>";

    }
}
