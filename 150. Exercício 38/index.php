<?php 

$array = ["uva", "salsisha", "carne", "ovo."];

function recebe() {

    global $array;

    return implode(", ", $array);

}

$all = recebe();

echo $all;

///

$lista = ["uva", "salsisha", "carne", "ovo"];

function ListaEmString($arr) {

    $str = "Você levou estes itens: ";

    for ($i = 0; $i < count($arr); $i++) {
        
        if ($i + 1 === count($arr)) {
            $str .= "$arr[$i].";
        } else {
            $str .= "$arr[$i], ";
        }
    }

    return $str;
}

echo ListaEmString($lista);