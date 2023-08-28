<?php

// 167. Removendo tags de HTML

// Podemos remover as tags de HTML de ums string com a função STRIP_TAGS;

// Geralmente para salvar dados no banco removemos as tags;

$texto_HTML = "<p>Este é um parágrago </p><div>Aqui temos uma DIV</div>";
echo $texto_HTML;

// Para salvar no banco de dados, precisamos eliminar as TAGS, da seguinte forma:

    $texto_banco = strip_tags($texto_HTML);
    echo $texto_banco;