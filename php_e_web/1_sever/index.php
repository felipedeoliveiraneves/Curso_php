<?php

print_r($_SERVER);

echo "<br>";

echo $_SERVER('MYSQL_HOME');

if($_SERVER['SEVER_NAME'] == 'localhost'){
    echo "Estar acessando o localhost <br>";
}