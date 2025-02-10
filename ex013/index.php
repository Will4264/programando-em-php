<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço For e Foreach</title>
</head>
<body>
    <?php 
    echo "<br>For<br>";
    //For
    
    for ($i = 1; $i <= 5; $i++){
        echo $i. "<br>"; //Imprime o valor de $i e pula para a próxima linha
    }
    
    echo "<br>";

    for ($a = 1; $a <= 5; $a++){
        echo "O quadrado de $a é " . ($a * $a) . "<br>";
    }
    
    echo "<br>Foreach<br>";
    $frutas = ["maçã", "Banana", "Laranja", "uva"];

    foreach($frutas as $fruta){
        echo $fruta . "<br>"; //Imrpime o nome de cada fruta
    }

    echo "<br>";
    $idades = [
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 22 
    ];

    foreach($idades as $nome => $idade){
        echo "$nome tem $idade anos. <br>"; //exibe nome e idade 
    }

    ?>
    
</body>
</html>