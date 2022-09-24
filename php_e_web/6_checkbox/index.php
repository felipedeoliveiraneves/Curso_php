<?php
if(isset($_POST['ingrediente'])){

    $ingrediente = $_POST['ingrediente'];

    print_r($ingrediente);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingrediente[]" placeholder="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" placeholder="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" placeholder="Abobóra"> Abobóra
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" placeholder="Feijão"> Feijão
        </div> 
        <div>
            <input type="checkbox" name="ingrediente[]" placeholder="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>
</body>
</html>