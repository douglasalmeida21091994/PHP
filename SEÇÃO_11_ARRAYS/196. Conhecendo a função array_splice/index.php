<?php

// 196. Conhecendo a função array_splice

// Podemos remover elemtnos de um array com a função $array_slice
// passamos como parâmetro o array, índice inicial e quantos eletos queremos remover

// ex.: array_slice($arr, 2, 1) -> a partir do índice 2, remove 1 elemento

$arr = [1, 2, 3, 4, 5, 6, 7];
// posso fazer direto:
$removidos = array_splice($arr, 1, 2); // a partir do índice 1 = 2 // removendo 2 elementos = O Nº 2 e 3
echo "<br>";

print_r($arr);  // Array ( [0] => 1 [1] => 4 [2] => 5 [3] => 6 [4] => 7 )
echo "<br>";

print_r($removidos); // Array ( [0] => 2 [1] => 3 )
echo "<br>";

// Posso também não especificar, porém, remove a partir de onde coloquei
$arr2 = [1, 2, 3, 4, 5, 6, 7];
$remove = array_splice($arr2, 2); // removendo a partir do índice 2 == 3, 4, 5, 6, 7

print_r($arr2);
echo "<br>";

print_r($remove);
echo "<br>";

// REMOVENDO NO INÍCIO E NO FINAL

$arr3 = [1, 2, 3, 4, 5, 6, 7];

$rem = array_splice($arr3, 1, -1); // removendo a partir do Nº 2 ao 6
print_r($rem);
echo "<br>";

print_r($arr3); // deixei apenas o 1 e o 7
echo "<br>";