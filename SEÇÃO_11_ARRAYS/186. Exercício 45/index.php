<?php

// 186. Exercício 45

$arr = range(10, 45);

for ($i = 0; $i < count($arr); $i++) {
    
    $soma = $arr[$i];

    echo $soma . "<br>";

    if ($soma >= 30 && $soma <= 35) {
        echo "O número: $soma é muito alto! <br>";
    } 
}