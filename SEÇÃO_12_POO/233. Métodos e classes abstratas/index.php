<?php

// 233. Métodos e classes abstratas

# As classes abstratas não podem ser instanciadas

# Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma classe herda a abstrata

# A palavra reservada tanto para classes como para métodos é abstract

# Exemplo:

# abstract class ClassAbstrata {}

abstract class Teste {

    public static function testandoClasse() {

        echo "Este método é da class abstrata. <br>";
    }

    abstract public function TesteAbstract();

}

# Para poder instanciar o meu método acima, tenho que criar uma nova class:
class Nova extends Teste {

    public function TesteAbstract() {
        echo "Este método é uma herança da class Teste. <br>";
    }
}


// NÃO POSSO INSTANCIAR:

# $t = new Teste; // isso gera erro -> Fatal error: Uncaught Error: Cannot instantiate abstract class Teste in

#também não posso fazer direto, sem colocar o meu método como static
Teste::testandoClasse();

# agora sim posso instanciar:
$t = new Nova;
$t->TesteAbstract();