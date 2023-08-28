<?php

header("Content-type: text/plain");

// 160. Comprimento da string

$string = "Verificando o comprimento da string";
$string2 = "É uma string menor";

echo strlen($string);
echo "\n";
echo strlen($string);
echo "\n";

$str = strlen($string);
$str2 = strlen($string2);

if ($str > $str2) {
    echo "A string \$string é maior do que a string \$string2 ";
} else {
    echo "A string \$string é menor do que a string \$string2";
}