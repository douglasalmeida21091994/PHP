<?php

// 230. Ancestralidade

# Para checar a ancestralidade de uma classe utilizamos o operador instanceof

# Podemos inserir essa operação em um if, pois vai retornar um booleano

# exemplo:

# $objeto instanceof Humano


class Humano {

}

class Animal {

}

class Professor extends Humano{

}

$douglas = new Humano;

if ($douglas instanceof Humano) {
    echo "Douglas é um humano <br>";
} else {
    echo "Douglas não é um Humano <br>";
}

$leao = new Animal;

if ($leao instanceof Humano) {
    echo "Leao é um Humano <br>";
} else {
    echo "Leão não é um Humano <br>";
}

$pedro = new Professor;

if ($pedro instanceof Professor) {
    echo "Pedro é um professor <br>";
} else {
    echo "Pedro não é um professor <br>";
}

if ($pedro instanceof Humano) {
    echo "Pedro é professor e humano <br>";
} else {
    echo "Pedro não é professor e humano <br>";
}