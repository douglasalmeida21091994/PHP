<?php

// 205. Ordenação de arrays

// Para ordenar em ordem crescente podemos utilizar a função sort() em um array
// Para ordenar em ordem decrescente, utilizamos o rsort()

$arr = [1, 5, 254, 98, 53, 0, 14472, 23125, 14, 25, 582, 36];

sort($arr); // ordenando crescente
// $teste = implode(" - ", $arr);
// echo $teste;
// echo "<br>";
print_r($arr);
echo "<br>";
echo "<br>";

$arr2 = [1, 5, 254, 98, 53, 0, 14472, 23125, 14, 25, 582, 36];
rsort($arr2); // ordenando decrescente
print_r($arr2);
echo "<br>";
echo "<br>";

// Pode ser com nomes também

$nomes = ["Douglas", "Pedro", "Cristina", "Patrícia", "Ana"];

sort($nomes);
print_r($nomes);
echo "<br>";