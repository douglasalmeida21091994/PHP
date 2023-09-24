<?php

// 187. Número de elementos

// função COUNT()

$arr = [1, 2, 3];
echo count($arr) . "<br>"; 

// COM RANGE()
$arr2 = range(1, 10);
echo count($arr2) . "<br>"; 

// ARRAY ASSOCIATIVO:
$arr3 = ["Nome" => "Douglas", "Idade" => 29, "Profissão" => "Programador"];
echo count($arr3) . "<br>"; 
print_r($arr3);