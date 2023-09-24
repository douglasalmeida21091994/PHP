<?php

// 206. Ordenação de arrays associativos

# Para ordenar em ordem crescente pelo valor das chaves, podemos utilizar a função asort()
# Para ordenar em ordem decrescente pelo valor das chaves, podemos utilizar a função arsort()

# Para ordena o array pelas chaves, utilizamos o ksort()

$idades = [
    "Douglas" => 29,
    "Paola" => 33,
    "Fiama" => 25,
    "José" => 50
];

asort($idades); // ordenando crescente pelos valores
print_r($idades);
echo "<br>";
echo "<br>";

arsort($idades); // ordenando decrescente pelos valores
print_r($idades);
echo "<br>";
echo "<br>";

ksort($idades); // ordenando crescente pelas chaves
print_r($idades);
echo "<br>";
echo "<br>";

krsort($idades); // ordenando decrescente pelas chaves
print_r($idades);
echo "<br>";
echo "<br>";
