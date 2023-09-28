<?php

// 227. Visibilidade

# Temos três formatos de visibilidade: PUBLIC, PROTECTED e PRIVATE

# PUBLIC: A propriedade ou método podem ser acessos de qualquer forma;

# PROTECTED: A propriedade ou método podem ser acessada apenas pela classe de origem ou as que recebem a mesma herença

# PRIVATE: A propriedade ou método pode ser acessada apenas pela classe que foi criada;


// PUBLIC

class Car {

    public $rodas = 4; #qnt inicial 4 das rodas
    public $vidro = "Sem película"; // valor normal
}

class Mecanico {

    public function alterarRodas($obj) {

        $obj->rodas = 10; #alterando a qnt das todas
    }

    public function colocarPelicula($obj, $pelicula) {
        $obj->vidro = $pelicula;
    }
}

$carro = new Car;
echo $carro->rodas . "<br>"; // valor igual a 4


$douglas = new Mecanico;
$douglas->alterarRodas($carro);
echo $carro->rodas . "<br>"; // valor igual a 10


$douglas->colocarPelicula($carro, "G20");
echo $carro->vidro . "<br>"; // valor alterado


// PRIVATE


class Car2 {

    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    }

    public function getPortas() {
        return $this->portas;
    }
}

$car = new Car2;

// $car->vidro; NÃO CONSIGO ACESSAR ASSIM, DÁ FATOL ERROR

#SÓ É POSSÍVEL ACESSAR VIA MÉTODO
echo $car->getVidro() . "<br>"; // Porém, não consigo alterar a minha propriedade privada dessa forma

# echo $car->vidro = "TESTE"; // NÃO PODE

###### o mesmo ocorre para o PROTECTED, apenas via método da class 

// echo $car->portas; dá o erro: Fatal error: Uncaught Error: Cannot access protected property Car2

echo $car->getPortas(); # só dessa forma