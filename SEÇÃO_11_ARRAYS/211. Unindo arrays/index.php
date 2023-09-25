<?php

// 211. Unindo arrays

# Podemos unir arrays, a ação também é conhecida como merge
# A função que vamos utilizar é a array_merge()
# Que como argumento aceita um número indeterminado de arrays

$arr1 = [1, 2, 3];
$arr2 = ["Teste", "Cinco", true, false];
$arr3 = [25, 12.2, 25.8];

$arrayMerge = array_merge($arr1, $arr2, $arr3, [5, 1]); // esse array do final é chamado de HARDCORE, só de exemplo
print_r($arrayMerge);
echo "<br>";