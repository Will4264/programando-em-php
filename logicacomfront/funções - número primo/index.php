<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verificar Número Primo</title>
  <link rel="stylesheet" href="./css/style.css">
 </head>
<body>
 
  <h1>Verificador de Números Primos</h1>
  <div class="botao2">
  <form action="" method="GET">
    <div>
      <label for="numero">Digite um número:</label>
      <input type="text" name="numero" id="numero" required />
      <input type="submit" value="Verificar">
    </div>
  </form>
  </div>
  <br><br>
  <div class="a2">
  <a href="http://localhost/logicacomfront/Sistema%20de%20voto%20obrigatorio/">Sistema de Voto Obrigatório</a>
  <br><br>
  <a href="http://localhost/logicacomfront/Desconto/">Descubra o Desconto da compra</a>  
  </div>
  <br><br>

  <div class="botao2">
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
  </div>
</body>
</html>