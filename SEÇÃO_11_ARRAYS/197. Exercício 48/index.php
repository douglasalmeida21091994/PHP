<?php

// 197. Exercício 48

// crie um array com valores: batata, maã, pêra, feijão, arroz;
//remova pera e feijão

$frutas = ["batata", "maã", "pêra", "feijão", "arroz"];

$frutasRemovidas = array_splice($frutas, 2, -1);
print_r($frutasRemovidas);
echo "<br>";

// OU:

$frutas2 = ["batata", "maã", "pêra", "feijão", "arroz"];

$frutasRemovidas2 = array_splice($frutas2, 2, 2);
print_r($frutasRemovidas2);
echo "<br>";

?>