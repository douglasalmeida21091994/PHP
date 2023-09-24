<?php

// 202. Exercício 50

// Crie um array associativo com nomes e idades
// Imprima esses dados em uma tabela de HTML
// Utilize as tags do elemento table

$pessoas = [
    "Douglas" => 29,
    "Marina" => 30,
    "Fiama" => 31,
    "Ninho" => 27
];

?>

<table border="1">

    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>    
    <?php endforeach; ?>

    </table>