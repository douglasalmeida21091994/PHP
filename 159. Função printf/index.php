<?php

header("Content-type: text/plain");

// %s = string

$name = "Douglas";

printf("O meu nome é: %s \n", $name);

// %d = inteiro

$idade = 28;

printf("Minha idade é: %d e nasci em %d. \n", $idade, 1994);

// %f = float

printf("A temperatura atual é de %f \n", 22.2); // sem limitar as casas decimais
printf("A temperatura atual é de %.2f \n", 22.2); // limitando as casas decimais para duas