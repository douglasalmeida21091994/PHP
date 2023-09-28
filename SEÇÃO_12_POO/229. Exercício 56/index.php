<?php

// 229. Exercício 56

# Crie uma classe Humano comalgumas propriedades e o método falar;
# Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos desta classe
# Exiba os valores das propriedades da classe pai e também utiliza os métodos

class Humano {
    
    public $cabelo = "Curto";
    public $olhos = "Verdes";
    private $carro = "Fiat";

    private function falar() {
        echo "Olá, eu estou falando! <br>";
    }

    public function GetFalar() {
        return $this->falar();
    }

    public function getCar() {
        return $this->carro;
    }
}

class Professor extends Humano {

    public $materia = "Inglês";

    public function aula() {
        return " O professor dar aula de $this->materia <br>";
    }


}

$almeida = new Humano;

echo $almeida->cabelo . "<br>";
echo $almeida->olhos . "<br>";

echo $almeida->getCar() . "<br>";
$almeida->GetFalar();

###################

$prof = new Professor;

echo $prof->getCar() . "<br>";
$prof->GetFalar(); // obs.: essa é a herdada public, que pega a private
echo $prof->aula();


/// COMO ESTAVA SEM TEMPO NÃO COLOQUEI A PRIVATE