<?php

//200. Exercício 49

// crie variáveis com características de algum objeto ou animal
// depois crie um array com compact com estas mesmas variáveis
// faça um loop no array e imprima os valores

$dog = "cachorro";
$urso = "urso";
$vira = "vira lara";
$monk = "macaco";

$animais = compact("dog", "urso", "vira", "monk");
// print_r($animais);
// echo "<br>";

foreach ($animais as $key => $ani) {
    echo "$key: $ani <br>";
}