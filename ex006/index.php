<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    <h2> Operadores Lógicos</h2>
    <?php 
    $idade = 20;
    $tem_cnh = true;

    echo ($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Você não pode dirigir.";
     echo "<br>";

     $tem_ingresso = false;
     $tem_cortesia = true;

     echo ($tem_ingresso or $tem_cortesia) ? "Você pode entrar na festa." : "Você não pode entrar na festa.";
     echo "<br>";

    //utilizndo os simbolos && para and e || para or    
    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo($sol && $sem_chuva || $feriado) ? "Você pode sair para passear.": "Melhor ficar em casa.";
    
    
    ?>
    
</body>
</html>