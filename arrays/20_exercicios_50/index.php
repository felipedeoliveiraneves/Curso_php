<?php

$pessoa = [
    "felipe" => 29,
    "joyce" => 26,
    "fernanda" => 33,
    "fabricia" => 38

];

?>

<table border="1">
    <tr>
        <th>nome</th>
        <th>idade</th>
    </tr>
    <?php   foreach($pessoa as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ></td>
            <td><?= $idade; ></td>
        </tr>
    <?php endforeach; ?>
</table>


