<?php

// 223. Exercicio 54

# Crie uma classe Pessoa
# Crie a propriedade nome e idade
# E também um método andar

class Pessoa {

    #Sem valor
    public $nome;
    #com valor, apenas para exemplo
    public $idade = 29;

    function andar($a) {
        echo "E ele andou $a metros! <br>";
    }
}

// instanciando
$almeida = new Pessoa; 

// atribuindo valores a propriedade que deixei sem valor atribuído
$almeida->nome = "Mota";

echo "O meu nome é $almeida->nome <br>";

# como eu já atribui o valor da propridade na minha class, já posso dar o echo direto com el
echo "E eu tenho $almeida->idade <br>";

$almeida->andar(100);

// CRIANDO UM OUTRO OBJETO:  fazendo mais limpo:

$joaquim = new Pessoa;
$joaquim->idade;

$joaquim->nome = "Joaquim";
echo "Meu nome é $joaquim->nome e tenho $joaquim->idade anos.";
echo $joaquim->andar(200);