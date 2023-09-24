<?php

// 194. Chaves e valores

// com a função array_keys recebemos um array apenas com as chaves de um array;

// com a função array_values recebemos um array apenas com os valores de um arrays;

$carro = [
    "Marca" => "BMW",
    "Motor" => "3.0",
    "Teto_Solar" => true,
    "Cambio" => "Manual",
    "Portas" => 4
];

$chaves = array_keys($carro);
print_r($chaves);
echo "<br>";

$valores = array_values($carro);
print_r($valores);
echo "<br>";
echo "<br>";

for ($i = 0; $i < count($valores); $i++) {

    echo "Índice $i:" . $valores[$i] . "<br>";
}