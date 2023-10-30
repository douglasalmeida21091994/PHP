<?php

# Como dito anteriormente $_SERVER tem diversas informações importantes:

    # SERVER_SOFTWARE > Identificação do servidor
    # SERVER_NAME >  Hostname, DNS ou Ip do servidor
    # SERVER_PROTOCOL > Protocolo do servidor
    # SERVER_PORT > Porta do servidor
    # QUERY_STRING > Argumentos após o ? na URL

print_r($_SERVER);
echo "<br>";

echo $_SERVER["MYSQL_HOME"] . "<br>";

echo "<br>";

if ($_SERVER["SERVER_NAME"] == "localhost") {
    echo "Olá, você está acessando a página inicial do site. <br>";
}
