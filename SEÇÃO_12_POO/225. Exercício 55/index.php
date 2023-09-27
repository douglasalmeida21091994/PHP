<?php

/// 225. Exercício 55

// Crie uma classe Carro
// Crie algumas propriedades e também a propriedade velocidade_maxima
// Crie o método setVelocidiadeMaxima, onde é possível alterar a velocidade máxima do carro
// er também o getVelocidadeMaxima onde é possível imprimir a velicidade do carro


class Carro {

    public $farol;
    public $portas;
    public $cor;
    public $velocidade_maxima;

    function setVelocidadeMaxima($velo) {
        $this->velocidade_maxima = $velo;
    }

    function getVelocidadeMaxima() {
        echo "A velocidade máxima deste carro é de: $this->velocidade_maxima km/h <br>";
    }
}

$ferrari = new Carro;

$ferrari->farol = "Milha";
$ferrari->portas = 4;
$ferrari->cor = "Vermelha";

$ferrari->setVelocidadeMaxima("300Km/h"); // definindo a velocidade

$ferrari->getVelocidadeMaxima(); // executando para imprimir

///////////

$fiatUno = new Carro;

$fiatUno->setVelocidadeMaxima("350Km/h"); // definindo a velocidade

$fiatUno->getVelocidadeMaxima(); // executando para imprimir
