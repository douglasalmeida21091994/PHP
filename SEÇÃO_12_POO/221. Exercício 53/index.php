<?php

// 221. Exercício 53

# Crie uma classe Cachorro;
# Crie um método latir e andar;
# Execute o método em novas instâncias da classe;

class Cachorro {

    function latir() {
        echo "Método latir! <br>";
    }

    function andar($a) {
        echo "O cachorro andou $a metros. <br>";
    }
}

$zeus = new Cachorro;
$billy = new Cachorro;

$zeus->latir();
$billy->latir();

$zeus->andar(10);
$billy->andar(50);

