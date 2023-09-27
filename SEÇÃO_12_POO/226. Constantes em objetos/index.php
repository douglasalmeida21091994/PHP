<?php

// 226. Constantes em objetos

// As constas são parecidas com variáveis, salvam valores em memória
// Porém o seu valor não pode ser alterado

#Exemplo de sintexe:

# public const CHAVE_API = "mndb051sd211";

class Humano {

    # Não precisa so sifrão
    public const OLHOS = 2;
    public const PERNAS = 2;
    public const BRACOS = 2;

    #para acessar uma consta pelo método é assim:
    function mostrarConstante() {
        echo self::BRACOS;
    }
}

$douglas = new Humano;

// para acessar a constante é assim:
echo "Eu tenho " . $douglas::OLHOS . " olhos <br>"; 
echo $douglas::PERNAS . "<br>";

// para acessar uma consta pelo método é assim:
$douglas->mostrarConstante();