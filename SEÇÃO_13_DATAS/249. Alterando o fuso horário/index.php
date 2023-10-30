<?php

# O PHP por padrão vai utilizar o fuso horário da máquina que está sendo executado, ou seja, o servidor.

# Porém, podemos alterar manualmente o fuso horário com a função date_default_timezone_set()

# Esta função recebe como parâmetro o novo fuso horário em string

date_default_timezone_set("America/Sao_Paulo");

$data= new DateTime();
print_r($data);
echo "<br>";