<?php

# Podemos calcular a diferença entre duas datas com o método diff() ou com o date_diff() que receberá como parâmetros as datas

# O resultado pode ser formatado com format()

# Exemplo:

# $diferenca = $dateA->diff($dateB);

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2005, 10, 15);

print_r($dataA);
echo "<br>";

print_r($dataB);
echo "<br>";

$diferenca = date_diff($dataA, $dataB);
print_r($diferenca);
echo "<br>";

echo $diferenca->format("%a days");
echo "<br>";

