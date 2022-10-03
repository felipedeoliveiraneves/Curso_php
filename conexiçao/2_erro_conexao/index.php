<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
    echo "Erros na conexão <br>";
    echo "Erros:" . $conn->connect_error;
}
