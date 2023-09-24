<?php

// 204. Buscando em arrays

// Função> in_array()

// A função verifica se um item passado por parâmetro está no array
// Vamos passar dois argumentos para a função, exemplo:

// in_array("item", $arr);

$arr = ["Maçã", "Pêra", "Uva", "Maxixe"];

if (in_array("Macaxeira", $arr) !== false) {
    
    echo "A fruta consta na lista! <br>";
} else {
    echo "A fruta não consta na lista! <br>";
}

$frut = "Maçã";

if (in_array("$frut", $arr) !== false) {
    
    echo "A fruta consta na lista! <br>";
} else {
    echo "A fruta não consta na lista! <br>";
}