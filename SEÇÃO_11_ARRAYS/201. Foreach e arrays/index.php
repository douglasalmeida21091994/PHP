<?php

// 201. Foreach e arrays

// Foreach() percorre um array e podemos pegar os valores ou as chaves
// chave => valor

// Ex.: foreach($itens as $key => $value) {}

$douglas [
    "nome" => "Douglas",
    "idade" => 29,
    "profissão" => "programador"
];

$paola [
    "nome" => "Paola",
    "idade" => 29,
    "profissão" => "programador"
];

foreach($douglas as $key => $value) {
    // direto: pegando chave e valores
    echo $key => $value . "<br>";
    
    // Pegando os valores apenas:
    echo $value . "<br>";

    // Pegando apenas as chaves:
    echo $key . "<br>";
}
