<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome = "Teste";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$stmt->close();


