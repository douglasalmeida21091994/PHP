<?php

// 242. Função strtotime

# Recebe uma string como parâmnetro, que é um texto sinalizando tempo

# Veja um exemplo de utilização:

# echo date(a/m/y, strtotime("+2 years")); 2 anos a mais

$cincoDias = strtotime("5 days");
echo $cincoDias . "<br>";

$dezDias = strtotime("10 days");
echo $dezDias . "<br>";

$soma = date("d/m/y", $cincoDias);
echo $soma . "<br>";

$soma2 = date("d/m/y", $dezDias);
echo $soma2;