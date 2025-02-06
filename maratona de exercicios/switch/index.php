<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
    <?php 
    $dia = 3;
    switch ($dia){
        case 1:
        echo "Domingo";
        break;
        case 2:
        echo "Segunda-Feira";
        break;
        case 3:
        echo "Terça-Feira";
        break;
        case 4:
        echo "Quarta-Feira";
        break;
        case 5:
        echo "Quinta-Feira";
        break;
        case 6:
        echo "Sexta-Feira";
        break;
        case 7:
        echo "Sábado";
    }
    
    echo "<br>";



    $nota = 5 ;
 
switch ($nota){
	case 
		$nota > 0 && $nota < 5:
		echo "Reprovado";
		break;
	case 
		$nota >= 5 && $nota < 7:
		echo "Recuperação";
		break;
	case 
		$nota >= 7 && $nota <= 10:
		echo "Aprovado";
		break;
	default :
		echo "Nota não existente.";
}


	echo "<br>";

    $preco = 3000000;
 
switch ($preco){
	case 
		$preco < 100:
		echo "Não há desconto disponível";
		break;
	case 
		$preco > 100 && $preco < 200:
		echo "Desconto de 10%";
		break;
	case 
		$preco >= 200 && $preco < 300:
		echo "Desconto de 20%";
		break;
	case 
		$preco >= 300:
		echo "Desconto de 30%";
		break;
	default :
		echo "Nota não existente.";
}

	echo "<br>" ;
	
	$codigo = 4;
 
switch ($codigo){
	case 1:
		echo "Desconto de 10%";
		break;
	case 2:
		echo "Desconto de 20%";
		break;
	case 3:
		echo "Desconto de 30%";
		break;
	default :
		echo "Não há desconto disponível";

	}


    
    ?>




</body>
</html>