<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Matriz</title>
</head>
<body>
    <?php 
    //Criando um array associativo
    $associativo = [
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];
    
    //Exibindo o array associativo
    echo "Array associativo";
    print_r($associativo);
    echo "<br>";
    print_r($associativo["nome"]); //acessando João

    echo "<br>";

    //acessando o primeiro valor
    $primeiroValor = reset ($associativo);
    
    echo $primeiroValor; //Saída: João
    
    echo "<br>";

    //Criando um array multidirecional
    $multidirecional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //exibindo o valor na posição [1] [2] (4, 5, 6) -> 6
    
    echo "Valor na posição [1][2]: " .$multidirecional[1][2];
    
    echo "<br>";

     $array1 = [1, 2, 3];
     $array2 = [4, 5, 6];
     
     //mesclando os dois arrays
     $novo_array = array_merge($array1, $array2);

     //exibindo o array resultante 
     echo "Array mesclado: ";
     print_r($novo_array);

    echo "<br>";
    $array = [10, 20, 30, 40];

    //Procurando o valor 30 no array
    $indice = array_search(30, $array);

    // Exibindo o índice onde o valor foi encontrado
    echo "O índice do valor 30 é: " .$indice;

    echo "<br>";

    //Verificando se o valor 25 está no array
    $existe = in_array(25, $array);

    //Exibindo se o valor existe ou não
    if($existe) {
        echo "O valor 25 está no array.";
    }
    else {
        echo "O valor 25 não está no array.";
    }

    echo "<br>";

    //Matrix 3x2 
    $matriz = [
        [1, 2], // Primeira linha
        [4, 5], // Segunda linha
        [7, 8], // Terceira linha
    ];

    // Acessando elementos da matriz 
    echo "Elemento na posição [0][1]: " . $matriz[0][1] . "<br>"; // Saída: 2
    echo "Elemento na posição [2][0]: " . $matriz[2][0] . "<br>"; // Saída: 7 
    ?>
</body>
</html>