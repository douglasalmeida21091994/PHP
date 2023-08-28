<?php

$str = "O rato roeu a roupa do rei de Roma, a partir de um loop";
$contadorDeA = 0;

for ($i = 0; $i < strlen($str); $i++){

    if ($str[$i] == "a") {
        $contadorDeA++;
    }
}

echo "A string tem $contadorDeA de letras A <br>";
