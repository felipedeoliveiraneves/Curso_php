<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// UM RESULTADO 

$item = $result->fetch_assoc();

print_r($item);

//TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);

