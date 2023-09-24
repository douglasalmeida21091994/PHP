<?php
// 180. Decompondo URLs

// com a função parse_url podemos decompor uma URL
// Recebemos uma array com todas as partes da URL
// Alguns elemtnos que podem ser retornados são: PROTOCOLO, HOST, PARÂMETROS


$url = "https://www.smilesaude.com.br";

$arrayURL = parse_url($url);
print_r($arrayURL);
echo "<br>";

$url2 = "http://www.smilesaude.com.br";

$arrayURL2 = parse_url($url2);
print_r($arrayURL2);
echo "<br>";

$url3 = "http://www.horadecodar.com.br/users/douglas?id=10&name=almeida";

$arrayURL3 = parse_url($url3);
print_r($arrayURL3);
echo "<br>";
