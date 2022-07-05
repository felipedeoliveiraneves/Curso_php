<?php

$pessoa = ['nome' => 'Felipe',
           'idade' => 18,
           'peso' => 112  
        ];

print_r ($pessoa);

$nome = $pessoa ['nome'];
echo "<br>";
if ( $pessoa['idade'] >= 18) {
echo "$nome e maior de idade"; 

}
