<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
     <?php 
     $array = ["Willian", "Lucas", "Edna", "Gabriel", ]; 
     echo "Nomes: ";
    print_r($array);
    
    echo "<br>";

    $array = ["Willian", "Lucas", "Edna", "Gabriel", ];

    unset($array[2]);
    echo "Removendo o valor no elemento 2: ";
    print_r($array);

    echo "<br>";

    
    
    $numeros = [1, 2, 3];
    $numeros2 = [4, 5, 6];
    

    $novo_numero = array_merge($numeros, $numeros2);

    
    echo "Array mesclado: ";
    print_r($novo_numero);


     ?>

 




</body>
</html>