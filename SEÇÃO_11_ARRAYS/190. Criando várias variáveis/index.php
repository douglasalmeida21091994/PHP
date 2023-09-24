<?php

// 190. Criando várias variáveis

// Usa-se a função LIST()

$pessoa = ["Douglas", 29, "Programador", "Verde"];
print_r($pessoa);
echo "<br>";

list($nome, $idade, $função, $corDosOlhos) = $pessoa;

echo $nome;
echo "<br>";

echo $idade;
echo "<br>";

echo $função;
echo "<br>";

echo $corDosOlhos;
echo "<br>";