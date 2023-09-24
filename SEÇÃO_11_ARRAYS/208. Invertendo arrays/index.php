<?php

// 208. Invertendo arrays

# Com a função array_reverse()
# Passamos apenas o array como argumento

// -- Nâo modifica a estrutura orginal, ou sejam deve usar em uma variável

$arr = [1, 2, 3, 4, 5, 6, 7];

$arrReverse = array_reverse($arr);

print_r($arr);
echo "<br>";

print_r($arrReverse);
echo "<br>";

// OBS.: FUNCIONA TAMBÉM COM NOMES, OU SEJA, COM STRINGS TAMBÉM