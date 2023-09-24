<?php 

// 177. Encontrando strings

$frase = "Olá, mundo! Este é um teste para realizar um teste.";
$frase = "Olá, mundo! Este é um teste para realizar um teste.";
$frase = "Olá, mundo! Este é um teste para realizar um teste.";


$str = strpos($frase, "java");

if ($str === false) {
    echo "A palavra não foi encontrada! <br>";
} else {
    echo $str . "<br>"; 
}


$palavra = "um";
$str2 = strpos($palavra, $frase);

if ($str2 === true) {
    echo $str2 . "<br>";
} else {
    echo "Palavra não consta!";
}
