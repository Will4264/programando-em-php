<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Desconto</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
 
  <h1>Calculadora de Desconto - 15%</h1>
  <div class="botao2">
  <form action="" method="GET">
    <div>
      <label for="valor">Digite o valor da sua compra:</label>
      <input type="text" name="valor" id="valor" required />
    </div>
    <br><input type="submit" value="Calcular Desconto" />
  </form>
  </div>
  <br><br>
  <div class="a2">
  <a href="http://localhost/logicacomfront/Sistema%20de%20voto%20obrigatorio/">Sistema de Voto Obrigatório</a>
  <br><br>
  <a href="http://localhost/logicacomfront/fun%c3%a7%c3%b5es%20-%20n%c3%bamero%20primo/">Descubra se o Número é Primo</a>
  </div>
  <div class="botao2">
  <?php
    if (isset($_GET['valor'])) {
      $valor = $_GET['valor'];
 
      function desconto($n) {
        return $n - ($n * 0.15);
      }
 
      $valorFinal = desconto($valor);
      echo "<h2>Resultado:</h2>";
      echo "<p>O valor da sua compra após 15% de desconto é: R$" . number_format($valorFinal, 2, ',', '.') . "</p>";
      
    }
  ?>
  </div>
</body>
</html>
 