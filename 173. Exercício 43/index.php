<?php

// 173. Exercício 43

// Converta a seguinte string para array:

$bens = "carro - navio - helicóptero - barco - jangada";

//1º forma:
print_r(explode("-", $bens));
echo "<br>";

//2ª forma:
$fraseArray = explode("-", $bens);
print_r($fraseArray);
echo "<br>";

//Para praticar, usando o for e pegando os índices:
for ($i = 0; $i < count($fraseArray); $i++) {
    echo "Este é o índice Nº " . $i . " => " . $fraseArray[$i] . "<br>";
}