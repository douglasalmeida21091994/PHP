<?php

// 234. Constructor

# Pelos construtores podemos inicializar objetos com valores de propriedades únicos para cadfa objeto;

# Passamos como argumentos os valores das propriedades

# Exemplo:

# function __construct($portas, $motor, $teto_solar) {}

class Teste {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Teste(4, "Vermelha", "Ferrari");

echo "Meu carro é da cor $ferrari->cor e tem $ferrari->portas portas. <br>";

$bmw = new Teste(4, "verde", "Ferrari");

echo "Meu carro é da cor $bmw->cor e tem $bmw->portas portas. <br>";

