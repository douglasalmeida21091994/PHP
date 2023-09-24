
<?php

// 179. Encontrando o resto da string

$frase = "olá mundo, retornando resto da string.";

$rest = strstr($frase, "mundo");

echo $rest . "<br>";

// Posso fazer com uma variável

$frase2 = "olá mundo, retornando resto da string.";
$b = "retornando";

$resto = strstr($frase2, $b);

echo $resto . "<br>";

$frase3 = "olá mundo, retornando resto da string.";

if (strstr($frase3, "oi") !== false) {
    echo "A frase foi localizada!";
} else {
    echo "A frase não foi localizada!";
}
