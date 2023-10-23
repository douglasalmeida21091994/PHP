<?php

# Temos mais dois métodos interessantes em DateTime(): setDate e setTime;

# SetDate => Recebe o ano, mês e dia, alterando complemente a data

# setTime => Recebe hora, minuto e segundo, alterando o tempo da data

$date = new DateTime();

print_r($date);
echo "<br>";

$date->setDate(2022, 9, 2);

print_r($date);
echo "<br>";

$date->setTime(5, 11, 13);

print_r($date);
echo "<br>";

# Porém, posso usar também formatada:
    
$date = new DateTime();
echo $date->format("d/M/Y");