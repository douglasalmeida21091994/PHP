<?php

# Datas que foram criadas com o objeto de DateTime() podem ser comparadas utilizando os operadores de comparação

# Operadores como: <, > ou ==

# Exemplo:

# $dataA > $dataB -> retornará um bool

$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();

$dataB->setDate(2025, 10, 15);
$dataC = $dataB;

if ($dataB > $dataA) {
    echo "A data B é maior do que a data A <br>";
}

if ($dataA < $dataB) {
    echo "A data A é menor do que a data B <br>";
}

if ($dataB == $dataC) {
    echo "As datas A e C são iguais <br>";
}

print_r($dataC);