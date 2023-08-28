<?php

// 172. Strings para array

// Podemos converter uma string em array com a função explode()

// Passamos primeiro o separador como argumento

// Depois a string que vai ser convertida

// Exemplo:

$frase = "Meu nome é Douglas e moro em Rio Largo";

$fraseArray = explode(" ", $frase);
print_r($fraseArray); // Result: Array ( [0] => Meu [1] => nome [2] => é [3] => Douglas [4] => e [5] => moro [6] => em [7] => Rio [8] => Largo )
// Separa a partir de cada espaço da frase


echo "<br>";

// OU fazer direto:

print_r(explode(" ", $frase)); // Resultado: Array ( [0] => Meu [1] => nome [2] => é [3] => Douglas [4] => e [5] => moro [6] => em [7] => Rio [8] => Largo )
echo "<br>";

$frase2 = "Meu nome é Douglas, e moro em Rio Largo, com minha esposa e minha fila.";
print_r(explode(",", $frase2));  //Resultado: Array ( [0] => Meu nome é Douglas [1] => e moro em Rio Largo [2] => com minha esposa e minha fila. )
// quando ele acha a vírgula, separa a frase a partir da vírgula.

echo "<br>";

$frase3 = "Carro, avião, bicileta, patins, ônibus";

$fraseExplode = explode(",", $frase3);

for ($i = 0; $i < count($fraseExplode); $i++) {
    echo "Este é o índice " . $i . " = " . $fraseExplode[$i] . "<br>";
}