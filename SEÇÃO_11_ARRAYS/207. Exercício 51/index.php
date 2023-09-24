<?php

// 207. Exercício 51

#Crie um array associativo com chaves com valor de nomes, e valores com ponturação
#ordene os dados do maior para o menos
#exiba uma lista simulando um rank, em HTML

$names = [
    "Douglas" => 10,
    "Marina" => 7.8,
    "Paola" => 9,
    "José" => 4,
    "Fiama" => 6
];

arsort($names)

?>

<h1>Ranking:</h1>

<table>
<ol>
    <?php foreach($names as $pessoa => $pontos): ?>
        <li><?= $pessoa ?>: <?= $pontos ?> pontos</li>
        <?php endforeach; ?>
</ol>
</table>