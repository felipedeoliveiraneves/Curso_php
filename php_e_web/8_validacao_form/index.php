<?php
$validasoes = [];

if(count($_POST) > 0){

    if($_POST['nome'] === ""){
        $validasoes[] = "Por favor, Preencha o seu nome de usuario !";
    }
    if($_POST['email'] === ""){
        $validasoes[] = "Por favor, Preencha o seu nome de E-mail !";
    }
    if($_POST['senha'] != $_POST['confirmacao'] ){
        $validasoes[] = "A senhas devem ser iguais!";
    }
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
    <?php if(count($validasoes)): ?>
        <ul>
            <?php foreach($validasoes as $validasoes): ?>
                <li><?= $validasoes ?></li>
                <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome !">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu E-mail !">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite seu Senha !">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme sua Senha !">
        </div>
       <div>
        <input type="submit" value="enviar">
       </div>
    </form>
</body>
</html>