<?php

// 232. Traits

# As traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança

# Podemos assim utilizar os métodos da classe que foi feita a trait

# Utilizar a palavra reservada use;

# Exemplo:

            //  trait Teste {
            //     use classeTrait
            //  }


trait Objeto {

    public function testeTrait() {
        echo "Este método é da class Objeto. <br>";
    }

}

trait TesteNovaTrait {

    public $idade = 29;
    public const nome = "Douglas";

    public function falaIdadeNome() {
        echo "Minha idade é " . $this->idade . " e meu nome é " . self::nome . ". <br>";
    }
}

class Central {

    use Objeto;
    use TesteNovaTrait;

}

$x = new Central;
$x->testeTrait();
$x->falaIdadeNome();
