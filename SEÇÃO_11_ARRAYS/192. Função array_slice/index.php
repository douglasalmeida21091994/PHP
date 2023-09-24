<?php

// 192. Função array_slice

$number = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

$slice = array_slice($number, 2, 5); // pegando do índice 2 mais 5 elementos
print_r($slice);
echo "<br>";

$slice2 = array_slice($number, 4, 4); // pegando do índice 4 mais 4 elementos
print_r($slice2);
echo "<br>";

$slice3 = array_slice($number, 4, -3); // pegando do índice 4 menos 3 elementos contando o negativo do final
print_r($slice3);
echo "<br>";

$slice4 = array_slice($number, 4); // Sem definir, ele pega do 4º até o final
print_r($slice4);
echo "<br>";
