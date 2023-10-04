<?php

// 241. Função date

# A função data recebe um parâmetro, que é o formato da data, e este é o primeiro parêmtro da mesma

# A resposta será a data atual

# Exemplo: date("d/m/y") // day, month, year

$data = date("d/m/y"); // 04/10/23
echo $data . "<br>";

$data = date("d/M/Y"); // 04/Oct/2023
echo $data . "<br>";

$data = date("D/M/Y"); // Wed/Oct/2023
echo $data . "<br>";

$data = date("d / M - Y"); // Wed/Oct/2023
echo $data . "<br>";

$data = date("d/m/Y"); // 04/10/232023
echo $data . "<br>";

$data = date("d/F/Y"); // 04/October/2023
echo $data . "<br>";