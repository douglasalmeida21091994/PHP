<?php

// 222. Propriedades

# Para declarar propriedades vamos basicamente criar uma variável dentro de uma class
# Porém precisamos definiri a sua privacidade, como por exemplo public
# Uma propriedade pública pode ser acessada do escopo do objeto

# Exemplo: public $idade = 29;

//classe
class Car {

    # Propriedades:
    public $rodas = 4;
    public $aro = 18;
    public $cor = "Vermelha";

    # Sem valor atribuído:
    public $motor;

    #Posso ter métodos tbm
    function ligar() {
        echo "Vrummmm! <br>";
    }

}

$ferrari = new Car; # instanciando objeto ou seja, criando objeto

echo $ferrari->rodas . "<br>";
echo $ferrari->aro . "<br>";
echo $ferrari->cor . "<br>";

## POSSO ALTERAR O VALOR DA PROPRIEDADE, EXEMPLO:
echo $ferrari->cor = "Azul <br>";

/// ou

#Reatribuindo um valor
$ferrari->cor = "Roxo <br>";
#imprimindo/executando
echo $ferrari->cor;

$ferrari->ligar();

# POSSO CRIAR UMA PRIPRIEDADE SEM VALOR ATRIBUÍDO E DAR O VALOR AQUI. Exemplo:
$ferrari->motor = 2.2;
echo $ferrari->motor;
