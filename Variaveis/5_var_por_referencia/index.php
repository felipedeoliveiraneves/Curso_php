<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;


echo "Atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;

echo "Atribuição após ref 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "felipe";

$nome2 =& $nome;

echo "Atribuição após ref 3 ";
echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome = "Emerson";

echo "Atribuição após ref 4 ";
echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";