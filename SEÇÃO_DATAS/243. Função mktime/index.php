<?php

// 243. Função mktime

# A função mktime recebe em seus parâmetros: hora, minuto, segundo, mês, dia e ano

# Assim podemos criar uma data a partir desta informação

# Exemplo:

# $date = mktime(01, 18, 00, 03, 12, 2000);
# echo date(d/m/y, $date);

$dataDeNascimento = mktime(8, 12, 13, 9, 21, 1994);
echo $dataDeNascimento . "<br>";

$dataFormatada = date("d/m/Y", $dataDeNascimento);
echo $dataFormatada . "<br>";