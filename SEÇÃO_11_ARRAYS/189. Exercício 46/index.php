<?php

// 189. Exercício 46

// Crie um array multidimensional com 3 array que tem 4 elementos cada;
// Imprima todos os elementos de cada um dos array
// Imprima também quando está mudando de array

$arr = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

for ($i =0; $i < count($arr); $i++) {

    // Imprimindo o array externo
    echo "Imprimindo Array externo: " . ($i + 1) . "<br>";  // pegando o índice e somando com +1

    // Imprimindo o array interno
    for($a = 0; $a < count($arr[$i]); $a++) {

        echo $arr[$i][$a] . "<br>";
    }
};







// TESTE 

print_r($arr[0]);
echo "<br>";
print_r($arr[1]);
echo "<br>";
print_r($arr[2]);
echo "<br>";