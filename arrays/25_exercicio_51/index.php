<?php

$ranking = [
    "Felipe" => 200,
    "Joyce" => 54,
    "fernanda" => 89,
    "Fabricia" => 32,
    "Eliane" => 345,
    "Celso" => 563
];

arsort($ranking);

?>

<h1>Ranking</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao):?>
        <li><?= $pessoa?> -> <?= $pontuacao ?> pontos </li>
    <?php endforeach; ?>
</ol>