<?php 

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
}else{
    $nome = 'nome padrão';
    $idade = 'idade padrão';
}
?>

<h1>Seu nome e <?= $nome ?>, e você tem <?= $idade?>, anos</h1>