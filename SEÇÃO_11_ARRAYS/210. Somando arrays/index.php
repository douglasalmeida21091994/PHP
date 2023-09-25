<?php

// 210. Somando arrays

# Para somar os itens de um array utilizamos a função array_sum()
# Ele nos retorna a soma de todos os elementos numéricos do array que passamos como argumento

$arr = [1, 25, 54, 58, 32, 14, 10, "20"];   // tbm soma a string de number

$soma = array_sum($arr);

print_r($arr); // apenas para ver os elementos do meu array
echo "<br>";
echo $soma . "<br>"; // imprimindo o resultado