<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto obrigatório</title>
</head>
<body>
    <h1>Voto obrigatório ou não</h1>
    <form action="" method="GET">
        <div>

           
            <label for="idade">Digite sua idade:</label>
            <input type="text" name="idade" required />
            <input type="submit" value="Verificar">
        </div>
    <br><br>
    <a href="http://localhost/logicacomfront/fun%c3%a7%c3%b5es%20-%20n%c3%bamero%20primo/">Descubra se o Número é Primo</a>
    <br><br>
    <a href="http://localhost/logicacomfront/Desconto/">Descubra o Desconto da compra</a>  

       
    </form>

    <?php 
    if (isset($_GET['idade'])) {
        $idade = (int) $_GET['idade']; // converte para inteiro, por segurança
        

        if ($idade >= 18 && $idade <= 70) {
            echo "<p>Obrigatório votar.</p>";
        } else if (($idade >= 16 && $idade < 18) || $idade > 70) {
            echo "<p>Pode votar, mas não é obrigatório.</p>";
        } else {
            echo "<p>Não pode votar.</p>";
        }
    }
    ?>
</body>
</html>