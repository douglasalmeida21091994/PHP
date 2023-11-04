<?php

if (isset($_GET["nome"])) {
    $nome = $_GET["nome"];    
    $cidade = $_GET["cidade"];    
    $idade = $_GET["idade"];

} else {
    $nome = "NÃO PREENCHIDO";
    $idade = "NÃO PREENCHIDO";
    $cidade = "NÃO PREENCHIDO";
}


?>

<h1>O seu nome é: <?= $nome ?>, e você moram em: <?= $cidade ?>. </h1>

<h2>E a sua idade é: <?= $idade ?> anos</h2>