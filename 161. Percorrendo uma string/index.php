<?php

header("Content-Type: text/plain");

$stringTeste = "Esta é uma string que será usando o FOR para pecorre-la.";

for ($i = 0; $i < strlen($stringTeste); $i++) {

    echo $stringTeste[$i] . " ";
    
}