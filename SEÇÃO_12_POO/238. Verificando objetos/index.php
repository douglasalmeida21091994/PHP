<?php

// 238. Verificando objetos

# Em PHP temos alguns métodos que nos ajudam a entender melhgor os objetos

# is_object() => verificar se uma variável é um objeto

# get_class() => verifica a classe de um objeto

# method_exists() => verifica se um método existe em um objeto


class Human {

    public function falar() {

        echo "Olá! <br>";
    }
}

$douglas = new Human;

$teste = 29;

##### VERIFICANDO SE É UM OBJETO

if (is_object($douglas)) {
    
    echo "É um objeto. <br>";
} else {
    echo "Não é um objeto. <br>";
}

if (is_object($teste)) {
    
    echo "É um objeto. <br>";
} else {
    echo "Não é um objeto. <br>";
}

##### PEGANDO O NOME DA CLASSE
echo get_class($douglas) . "<br>"; // Human

##### PEGANDO O MÉTODO

if (method_exists($douglas, "falar")) {
    echo "O método existe. <br>";
} else {
    echo "O método não existe. <br>";
}

if (method_exists($douglas, "teste")) {
    echo "O método existe. <br>";
} else {
    echo "O método não existe. <br>";
}

