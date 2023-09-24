<?php

// 188. Array multidimensional

$arr = [
    [1, 2, 3],
    [4, 5, 6]
];

echo $arr[0][1] . "<br>";// entrando no primeiro array dentro do array e pegando o segundo elemento = 2
echo $arr[1][2] . "<br>";// entrando no segundo array dentro do array e pegando o terceiro elemento = 6

echo count($arr) . "<br>"; // zero
echo count($arr[1]) . "<br>"; // três e assim por diante