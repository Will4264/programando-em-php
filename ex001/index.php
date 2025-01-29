<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código</title>
</head>
<body>
    <h2> 
     <?php 
     
     
     $nome = "Lucas Washington";
     $sobrenome = "Tá Maluco";

    echo "Seja Bem-Vindo $nome \u{1F606} $sobrenome \u{2744}";
       

     //A variavel pode ser alterada

     $nome = "Lucas Monteiro";

     
     //Quebra de linha 
     echo "<br> <br>";

   //Declarando uma constante

     const time = "Santos";
     
     echo "Meu time que não torço é " . time;
     
     ?> 
    </h2>
</body>
</html>