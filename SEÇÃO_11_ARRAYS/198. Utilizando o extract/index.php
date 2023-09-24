<?php
// 198. Utilizando o extract

// com a função extract() podemos criar variáveis rapidamente de arrays associativos
// O nome da chave será o nome da variável
//se houver uma variável já criada com o nome da chave, ela será sobrescrita

$arr = [
    "nome" => "Almeida",
    "idade" => 29
];

extract($arr);

echo $nome . "<br>";
echo $idade . "<br>";

//////////////////////////////////////

$raca = "pitbull";

$dog = [
    "raca" => "alemão",
    "idade2" => "5 anos"
];

echo $raca . "<br>";

extract($dog);

echo "$raca" . "<br>";
echo $idade2 . "<br>";


// havendo uma variável já definida com uma atribuição, se eu usar o mesmo nome da variável após o extract, ele vai reatribuir o valor, ou seja, ela atualizará.


?>
