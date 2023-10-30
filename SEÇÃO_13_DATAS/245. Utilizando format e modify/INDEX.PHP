<?php

# Os métodos FORMAT e MODIFY são da classe DateTime() e nos ajudam a manipular os dados nestes objetos;

# FORMAT => Formata a data
# MODIFY => Altera a data;

$data = new DateTime();

echo $data->format("d/m/y") . "<br>";

echo $data->format("D / M / Y") . "<br>";

echo $data->format("l / F / Y") . "<br>";

//// MODIFICANDO A DATA:

$data->modify("+5 days");
echo $data->format("d/m/y") . "<br>";

$data->modify("-5 days");
echo $data->format("d/m/y") . "<br>";
