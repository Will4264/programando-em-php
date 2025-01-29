<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Comentários e Variáveis dentro de outra variável </h2>
    <?php
    //Para comentário de uma linha eu uso o barra e barra
    /*
    eu uso para comentar varias linhas ao mesmo tempo
    */

    $nome = "Ana";
    $sobrenome = "Cunha";

    //Avariável abaixo recebe uma interpolação
    $frase = "Seu nome é $nome, seu sobrenome é $sobrenome" ;

    echo "$frase"; 
    
    ?>

</body>
</html>