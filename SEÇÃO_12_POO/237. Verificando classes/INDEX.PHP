<?php

// 237. Verificando classes

# Em PHP temos alguns métodos que nos ajudam a entender as classes;

# class_exists() => verifica se a class existe
# get_class_methods() => verifica os métodfos de uma class
# get_class_vars() => mapeamento das propriedades de uma classe

class Humano {

    public $nome = "Douglas";
    public $idade = 29;

    public function teste() {}
    public function human() {}

}

if (class_exists("Humano")) {

    echo "A classe existe. <br>";
} else {
    echo "A classe não existe. <br>";
}

if (class_exists("Dog")) {

    echo "A classe existe. <br>";
} else {
    echo "A classe não existe. <br>";
}

print_r(get_class_vars("Humano"));
echo "<br>";
print_r(get_class_methods("Humano"));