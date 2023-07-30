<?php 

$array = ["uva", "salsisha", "carne", "ovo."];

function recebe() {

    global $array;

    return implode(", ", $array);

}

$all = recebe();

echo $all;