<?php

//195. Verificando se chave existe 
// usa também o ISSET

$arr = [
    "Nome" => "Douglas",
    "Idade" => 29
];

$check = array_key_exists("Nome", $arr);
print_r($check);
echo "<br>";

if (array_key_exists("Nome", $arr)) {
    
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}


// USANDO O ISSET()
$arr2 = [
    "Nome" => "Douglas",
    "Idade" => 29
];


if (isset($arr2["Nome"])) {
    echo "A chave existe, usando o ISSET(). <br>";
} else {
    echo "A chave não existe, usando o ISSET(). <br>";
}

// CONSULTANDO DE UMA VARIÁVEL EXISTE

if (isset($testeVar)) {
    echo "A variável existe! <br>";
} else {
    echo "A variável não existe! <br>";
}
