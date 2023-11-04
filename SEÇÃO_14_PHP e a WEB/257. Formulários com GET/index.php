<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO COM GET</title>
</head>
<body>

<!--
# Vamos precisar criar um formulário e definir o método como GET, e também o arquivo ou rota que vamos acessar em action

# No lado do servidor vamos acessar a variável $_GET que contém os parâmetros enviados para o servidor

# Faremos o processamento e retornamos algo para o usuário
-->

<form action="processamento.php" method="get">

    <div>
        <input type="text" name="nome" id="texto" placeholder="digite seu usuário">
    </div>
    
    <div>
        <input type="text" name="cidade" placeholder="cidade">
    </div>

    <div>
        <input type="number" name="idade" id="idad" placeholder="digite sua idade">
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>

</form>
    
</body>
</html>

