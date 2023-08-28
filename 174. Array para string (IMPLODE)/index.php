<?php

// 174. Array para string

//Função: implode();

// Passamos o primeiro separador como argumento

// Depois a string que vai ser convertida

// exemplo:

$array =array("Maça", "Uva", "Pêra", "Banana");
$string = implode(", ", $array);
echo $string . "<br>";

for ($i = 0; $i < count($array); $i++) {

  echo $array[$i];

  if ($i < count($array) - 2) {
    echo ", ";
  } elseif ($i == 2) {
    echo " e ";
  } else {
    echo ".";
  }
}

// Saída: Maça, Uva, Pêra e Banana.