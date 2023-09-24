<?php

// 203. Reduce em arrays

// A função array_reduce() tem como objetivo reduzir um array a apenas um valor
// Podemos passar uma segunda função como parâmetro, para algum processo de executado

// Ex.: array_reduce($arr, $funcao);

$arr = [1, 5, 4, 10, 15, 25, 30, 55, 121, 225, 2, 8, 9];

function soma($a, $b) {
    return $a + $b;
}

$result = array_reduce($arr, "soma"); // o nome da função deve ser em string
echo $result . "<br>";

function subtracao($a, $b) {
    return $a - $b;
}

$result2 = array_reduce($arr, "subtracao"); // o nome da função deve ser em string
echo $result2 . "<br>";



