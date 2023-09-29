<?php

// 231. Interfaces

# As interfaces criam um método de definição de uma classe

# Então toda classe que implementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente.

# A palavra reservada é implements

#Exemplo:
#   class Humano implements Caracteristicas

interface Caracteristicas {

    const nome = "Douglas Almeida";

    public function falar();
}

class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar() {
        echo "Olá, meu nome é " . self::nome . " e tenho " . $this->idade . " anos. <br>";
    }

    public function dizerIdade() {
        echo "Olá, eu tenho " . $this->idade . " anos de idade. <br>";
    }
}

$doug = new Humano;

$doug->falar();
$doug->dizerIdade();