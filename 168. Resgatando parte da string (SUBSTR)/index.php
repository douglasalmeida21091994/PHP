<?php

// 168. Resgatando parte da string

// Com a função substr(), podemos resgatar apenas uma parte da string;
// Ex.: substr(str, inicio, fim);

// str é a string
// início é o índice inicial da palavra ou texto
//fim é o índice final da palavra ou texto

$testando_substr = "Esta é a minha string";

$minha = substr($testando_substr, 10, 5);
echo "Peguei apenas a palavras: " . strtoupper($minha) . " da string, sem alterá-la <br>";

// Pegando de determinada parte até o final (OMITINDO O COMPRIMENTO):

$str = "Pegando até o final";
echo substr($str, 8) . "<br>";


// COMPRIMENTO NEGATIVO OU SEJA, ELIMINANDO O FINAL, POR EXEMPLO:

echo substr($str, 8, -5); // eliminando a palavra final