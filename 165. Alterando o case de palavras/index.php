<?php
//165. Alterando o case de palavras

// ucfirst = Apenas a primeira letra ficará em maiúscula
// uswords = primeira letra de cada palavra em maiúscula

$string1 = "testando e alterando apenas a primeiras cases desta string <br>";
echo ucfirst($string1);

$string2 = "todas as palavras com as iniciais com a letra maiuscula <br>";
echo ucwords($string2);