<?php

    include_once("db.php");

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca ">
    </div>
    <div>
        <label for="km">Kilometragem:</label>
        <input type="text" name="km" placeholder="Insira a Kilometragem ">
    </div>
    <div>
        <label for="color">Cor do carro :</label>
        <input type="text" name="color" placeholder="Insira a cor ">
    </div>
    <input type="submit" value="Salvar">
</form>