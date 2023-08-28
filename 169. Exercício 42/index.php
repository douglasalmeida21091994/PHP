<?php

// 169. Exercício 42

// Na frase: "Cadê o meu queijo? Ele estava aqui em cima."
// Resgatar apenas a palavra QUEIJO

$frase = "Cadê o meu queijo? Ele estava aqui em cima.";

$queijo = substr($frase, 12, 6);
echo $queijo . "<br>";

$estava = substr($frase, 24, 6);
echo $estava . "<br>";


// identificando exatamente o índice que começa a palavra: ESTAVA

$palavra = "estava";
$posicao = stripos($frase, $palavra);

if ($posicao !== false) {
    echo "A palavra " . strtoupper($palavra) . " está na posição $posicao";
} else {
    "A palavra $palavra não foi encontrada na frase";
}