<?php

// 224. Conhecendo o this

// O $this se refere a instância atual do objeto
// Podendo assim alterar um valor de uma propriedade do objeto com:

# $this->propriedade = "X";

// Tradução literal = este
// Podemos invocar um método do objeto com this também

class Animal {

    public $nome;  // método sem nome ainda

    function escolherNome($nome) {

        $this->nome = $nome;
    }

    function latir() {

        return "au au <br>";
    }

    function latirAlto() {
        return strtoupper($this->latir());
    }
}

$zeus = new Animal;

echo "O nome do animal é: $zeus->nome <br>"; // aqui não sairá nada, pois ainda não dei o nome

$zeus->escolherNome("Zeus"); // Dando o nome

echo "O nome do animal é: $zeus->nome <br>"; // aAgora sim sairá o nome

echo $zeus->latir();

echo $zeus->latirAlto();
