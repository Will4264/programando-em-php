<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verificar Número Primo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
    }
    form div {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
 
  <h1>Verificador de Números Primos</h1>
 
  <form action="" method="GET">
    <div>
      <label for="numero">Digite um número:</label>
      <input type="text" name="numero" id="numero" required />
    </div>
    <input type="submit" value="Verificar" />
  </form>
  <br><br>
  <a href="http://localhost/logicacomfront/Sistema%20de%20voto%20obrigatorio/">Sistema de Voto Obrigatório</a>
  <br><br>
  <a href="http://localhost/logicacomfront/Desconto/">Descubra o Desconto da compra</a>  


  <?php
   
    if (isset($_GET['numero'])) {
      $numero = $_GET['numero'];
 
      function ehPrimo($numero) {
        if ($numero <= 1) {
          return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
          if ($numero % $i == 0) {
            return false;
          }
        }
        return true;
      }
 
      echo "<h2>Resultado:</h2>";
      if (ehPrimo($numero)) {
        echo "<p>$numero é um número primo.</p>";
      } else {
        echo "<p>$numero não é um número primo.</p>";
      }
    }
  ?>
</body>
</html>