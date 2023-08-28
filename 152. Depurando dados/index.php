<?php

// depuração de valores (encontrar algum problema no código)

// utilizamos duas funções para veriuficar dados formatados:

    // print_r e var_dump

    // as duas apresentam os dados de forma semelhante;
    // Porém, var_dump exibe de uma forma "human readable", traduzindo seria algo como "para humanos lerem".

$array = [
    "teste",
    1,
    12.3,
    true,
    false,
    [1,2,3]
];

print_r($array);
echo "<br>";
var_dump($array);

