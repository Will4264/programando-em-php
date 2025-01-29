<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritiméticos </title>
</head>
<body>
    <h1>Operadores Aritiméticos</h1>
    <?php

    $soma = 205.85 + 20;
    $subtracao = 10 - 8;
    $divisao = 30 / 3;
    $resto = 10 % 2;
    $multiplicacao = 20 * 5;
    $potenciacao = 3 ** 8;
    $teste = (2*(2+(2-1))) + 8 * 2;

    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtracao <br>";
    echo "Resultado da divisão é $divisao <br>";
    echo "O resto da divisão é $resto <br>";
    echo "Resultado da multiplicação é $multiplicacao <br>";
    echo "Resultado da Potenciação é $potenciacao <br>";
    echo "Resultado do teste $teste <br>";
    
    /*Ordem de grandeza
    1º = () Parênteses
    Fora do parênteses se calcula na ordem abaixo.
    2º = Potenciação
    3º = Multiplicação
    4º = Divisão
    5º = Soma
    6º = Subtração
    */

    //Primeira expressão: (3+2) * 4
    $valor1 = (3 + 2) * 4;

    //Segunda expressão: (2 * (2 + (2 - 1))) + 8
    $valor2 = (2 * (2 + ( 2 - 1 ))) + 8 * 2;


    //Exibindo os resultados - concatenação
    echo "Resultado da primeira expressão "  . $valor1 . "<br>";

    echo "Resultado da segunda expressão "  . $valor2 . "<br>";

    ?>
 
 



</body>
</html>