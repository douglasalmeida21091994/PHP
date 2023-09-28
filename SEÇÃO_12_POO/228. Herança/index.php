<?php

// 228. Herança

# A herança é o recurso da OOP / POO que dá a possibilidade de uma classe HERDA MÉTODOS e PROPRIEDADES DE OUTRA

# A palavra reservada é extends

# EXEMPLO:

# class Programador extends Pessoa {}

class Humano {

    public $idade = 29;

    public function falar() {
        echo "Olá, mundo! <br>";
    }

    #Agora criando um método privado
    private function gritar() {
        echo "PHP É MUITO BOMMMM! <br>";
    }

    # pra acessar o privado tenho que pegar com um public
    public function getGritar() {
        return $this->gritar();
    }

    # Agora criando um método protected
    protected function falarBaixo() {
        echo "lalalalala <br>";
    }

    # Para acessar o protected, tenho que ter um public
    public function GetFalarBaixo() {
        return $this->falarBaixo();
    }
}

class Programador extends Humano {
    ####SEM DECLARAR NADA AQUI, ELE JÁ HERDOU TUDO DE HUMANO

    // A grande sacada aqui é criar um método que está acessando o públic de Humano, que está pegando o PRIVATE ou PROTECTED

    public function GetFalarBaixoDeHumano() {
        return $this->GetFalarBaixo();
    }


    # OU EU POSSO PEGAR DIRETO (pegando a protected)
    public function diretoPelaprotected() {
        return $this->falarBaixo();
    }


    # OBS.: NÃO CONSIGO PEGAR A PRIVATE
    public function naoPegaPrivate() {
        return $this->gritar(); // Isso dará erro fatal, pois o método que peguei é PRIVATE
    }

}

$ze = new Humano;
$ze->falar();
echo $ze->idade . "<br>";

// acessando agora o método PRIVADO pelo PÚBLIC
$ze->getGritar();

// acessando agora o método PROTECTED pelo PÚBLIC
$ze->GetFalarBaixo();

###########

echo "<br>";

$douglas = new Programador;
$douglas->falar();
echo $douglas->idade . "<br>";
// acessando agora o método PRIVADO pelo PÚBLIC, POIS FOI HERDADO
echo $douglas->getGritar();

// acessando agora o método PROTECTED pelo PÚBLIC
$douglas->GetFalarBaixo();

// pegando pela HERANÇA:
$douglas->GetFalarBaixoDeHumano();

// pegando DIRETO DA private da CLASS Humano
$douglas->diretoPelaprotected();

## erro faltal caso eu queira pegar o método PRIVATE pela HERANÇA:
$douglas->gritar(); // Fatal error: Uncaught Error: Call to private method Humano::gritar() from global scope