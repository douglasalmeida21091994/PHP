<?php

// 235. Exercício 57

# Crie uma classe Cachorro com propriedades

# Inicie as propriedades via constructor

# Crie um método para exibir cada uma das propriedades que você criou


class Cachorro {

    public $patas;
    public $cor;
    public $raca;

    function __construct($patas, $cor, $raca) {

        $this->patas = $patas;
        $this->cor = $cor;
        $this->raca = $raca;
    }

    public function exibirAnimal() {

        return "Meu cachorro tem $this->patas patas, é da cor $this->cor e da raça $this->raca. <br>";
    }
}

$zeus = new Cachorro(4,"Amarela", "Pitbul");
echo $zeus->exibirAnimal();


////////

# Posso fazer tbm com variáveis

$patas = 4;
$cor = "preta";
$raca = "Vira Lata";

$caramelo = new Cachorro($patas, $cor, $raca);

echo $caramelo->exibirAnimal();