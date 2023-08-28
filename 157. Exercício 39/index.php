<?php

header("Content-type: text/plain");
// 


$cardapio = [
    "carne" => 23,
    "pizza" => 30,
    "sorvete" => 15
];

function itens($cardapio) {

    $itensCaros = [];

    foreach($cardapio as $itens => $precos) {
        if ($precos > 15) {
            array_push($itensCaros, $itens);
        }
    }
    return $itensCaros;
}

$executandoFunction = itens($cardapio);

print_r($executandoFunction) . "\n";
