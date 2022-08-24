<?php

$pessoa = ["Felipe", 29, "programador", "castanho"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $corDosolhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corDosolhos <br>";

