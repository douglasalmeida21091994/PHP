<?php

// 178. Encontrando a última ocorrência
$string = "teste de teste do strrpos <br>";

$str = strrpos($string, "teste");

if ($str !== true) {

    echo "Localizado na posição: $str. <br>";

} else {
    echo "Não localizado!";
}

$p = substr($string, strpos($string, "teste"), 5);

echo $p;