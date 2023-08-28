<?php

// 175. Exercício 44

// Converter a seguinte array para uma string:

$arr = ["O", "PHP", "é", "muito", "legal"];

$fraseString = implode(" ", $arr);
echo $fraseString;
echo "<br>";

for ($i = 0; $i < count($arr); $i++) {

    echo $arr[$i];

    if ($i < count($arr) - 1 ){
        echo ", ";
    } else {
        echo ".";
    }
}