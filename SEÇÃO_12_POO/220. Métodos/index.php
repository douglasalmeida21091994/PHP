<?php

// 220. Métodos

# Para declarar um método vamos utilizar a sintexe de function, porém dentro de uma class;
# O resto é exatamente igual a sintaxe de função;
# Podemos retornar ou imprimir dadops, dependendp da nossa regra de negócio

class Pessoa {

    function falar() {
        echo "Olá, eu sou um objeto! <br>";
    }

    function soma($a, $b) {
        echo $a + $b . "<br>";
    }
}

$douglas = new Pessoa; // instanciando
$douglas->falar(); // executando o método

// POSSO EXECUTAR QUANTAS VEZES EU QUISER. Exemplo:
$douglas->falar(); // executando o método

// POSSO INSTANCIAR TAMBÉM UM NOVO OBJETO
$joao = new Pessoa; // Criei um novo objeto
$joao->falar();


// Criei um novo método (soma) dentro da minha class Pessoa
// Posso fazer com que o meu objeto já criado execute

$douglas->soma(10, 10);
$joao->soma(20,40);