<?php

// 212. Diferença entre arrays

# Podemos verificar qual a diferença entre dois ou mais arrays com PHP
# A função que vamos utilizar para isso é a array_diff()
# Essa função aceita um número indeterminado de arrays

# Ele retorna a diferença do primeiro array para o segundo, seguindo a ordem passada como aprâmetro

# Exemplo:

$arr = [1, 5, 8];
$arr2 = [3, 5, 9];

$diff = array_diff($arr, $arr2); // ou seja, vai me retornar 1 e 8, pois são os únicos que não tem no $array2
print_r($diff);
echo "<br>";
echo "<br>";

$diff = array_diff($arr2, $arr); // ou seja, vai me retornar 3 e 9, pois são os únicos que não tem no $array
print_r($diff);
echo "<br>";
echo "<br>";