<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

    <<?php 
    //Criação de array indexidado
    $array = [10, 20, 30, 40];

    //exibindo o array
    echo "Array original: ";
    print_r($array); //print_r() exibe o array de forma legível
    
    echo "<br>";
    //adicionando um valor ao final da array
    $array[] = 50;

    //exibindo o array atualizado
    echo "Array após adicionar 50";
    print_r($array); 
    
    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array[1]= 25;

    echo "Array após alterar o valor 25 na posição 1 para 25: ";
    
    echo "<br>";
    
    //Removendo o valor no índice 2
    unset($array[2]);

    

    //Reorganizando os índices do array
    $array = array_values($array);

    //Exibindo o array após remover o índice e reorganizar
    echo "Array após remover o valor no índice 2: ";
    print_r($array);

    echo "<br>";
    $array[] = 19;

    //Ordenar o array de forma crescente
    sort($array);

    //Exibindo o array ordenado
    echo "Array após orndenar os valores: ";
    print_r($array);


    ?>


</body>
</html>