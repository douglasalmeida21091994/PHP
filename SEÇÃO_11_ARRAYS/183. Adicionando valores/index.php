<?php

// 183. Adicionando valores

// Podemos criar novos índices em um array

$array = [];
print_r($array);
echo "<br>";

$array[0] = 20;

print_r($array);
echo "<br>";

$array[2] = 50;

print_r($array);
echo "<br>";

$array[10] = 80;

print_r($array);
echo "<br>";

// posso adicionar também:

$array[0] += 30; // adicionando 30 com o índice 0 (zero) = 50

print_r($array);
echo "<br>";


// Array associativo

$arrAssoc = [];

print_r($arrAssoc);
echo "<br>";

$arrAssoc["Carro"] =  "BMW";

print_r($arrAssoc);
echo "<br>";

$arrAssoc["Avião"] =  "Latam";

print_r($arrAssoc);
echo "<br>";


