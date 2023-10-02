<?php

// 236. Classes anônimas

# Asc lasses anônimas são criadas em uma variável e não possuem nome;

# Elas funcionam como qualquer outra classe

# Precisamos fechar ela com ;

# Exemplo: $anonima = new class() { };

$pessoa = new class () {

    public $nome = "Douglas";

    public function dizerNome() {

        echo "Olá, meu nome é $this->nome. <br>";
    }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();