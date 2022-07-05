<?php


$arr = ['modelo' => 'gol', 
        'ano' => 2010,
        'valor' => 20000
    ];

 print_r ($arr);
 echo "<br>"; 
 $modelo = $arr ['modelo'];
 $idade = $arr ['ano'];

 echo "O carro do modelo $modelo no ano $idade tem um bom mercado!";