<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$table = 'itens';
$nome = 'xicara';
$descricao = 'E uma xicara usada cor de rosa';

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);
$conn->close();
