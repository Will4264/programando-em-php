<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>
<body>
    <h2>
    <?php
    //variavel do tipo string 
    $sobrenome ="Cunha";

    //Variável do tipo int
    $idade = 35;

    //Variável do tipo float
    $peso = 80;

    //Variável do tipo boolen (verdeiro ou falso)
    $casada = true;

    echo "$sobrenome $idade $peso ";

    //Método 1: Usado var_dump para exibir o valor booleano
    //var_dump($casada); // Exibe 'bool(false)'

    // Métido 2: Usando uma conversão booleana para string
    echo ($casada ? "Casada" : "Não é casada"); // Exibe 'Não é casada'

    ?>
    </h2>
</body>
</html>