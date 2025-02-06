<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if e else</title>
</head>
<body>
    
    <?php 
    
    $numero = -2;
    if ($numero >= 1){
        echo "O número é positivo.";
       
        }
   
       if ($numero <= -1){
            echo "O número é negativo. ";
       
        }
 
            else if ($numero == 0){
                echo "O número é zero.";
               
            }

       
    echo "<br>";
    
    $nota = 1;
    
    if ($nota >=5 && $nota <=6.9) {
        echo "Recuperação";
    }
    
    else if ($nota >=7 && $nota <=8.9) {
        echo "Aprovado";
    }   

    else if ($nota >=9 && $nota <=10) {
        echo "Aprovado com distinção";
    }   

    else {
        echo "Reprovado";
    }

    echo "<br>";


    $idade = 8;

    if ($idade >= 16 && $idade <= 17) {
        echo "Pode votar, mas não é obrigatório";
    }

    else if ($idade >= 18) {
        echo "Obrigatório votar";
    }

    else {
        echo "Não pode votar";
    }

    echo "<br>";   
    
   $número = 23;
   if ($número % 2 == 0) {
    echo "O número é par";
   }

   else {
    echo "O número é ímpar";
   }
    
   echo "<br>";  

   $h = 30;
 
    if ($h >= 10 && $h <= 12){
        echo "Preço do ingresso: R$10,00";
    }
    else if ($h >12 && $h <=17){
        echo "Preço do ingresso: R$20,00";
    }
   
    else if ($h > 17 && $h <=22){
        echo "Preço do ingresso: R$30,00";
    }
    else {
        echo "Não há sessões neste horário.";
    }
   
   
       ?>

    </body>
    </html>    
    