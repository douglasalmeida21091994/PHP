<?php

// 193. Dividindo arrays

// função: array_chunk()

$arr = range(1, 30); // criando um array com 30 números
print_r(array_chunk($arr, 6)); // divindo esse array com 6 elementos
echo "<br>";

$arrays = array_chunk($arr, 10);
echo "<br>";

print_r($arrays[2]);
echo "<br>";