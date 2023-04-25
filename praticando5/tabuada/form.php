<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>Formulário - Calculadora</title>
</head>

<body>
  <center>
    <h1>Calculadora</h1>
    <div class="container">
      <form action="" method="get">
        <div class="mb-3 row-3">
          <label for="num" class="form-label">Digite um número</label>
          <input type="number" name="num" class="form-control-sm">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
      </form>
    </div>
    <hr>
          <?php
          // número fixo
          $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
          echo "<strong><h1>Tabuada do número: $num </h1></strong>";
          ?>
          <br>
          <?php
          // loop de 1 a 10
          for ($i = 1; $i <= 10; $i++) {
            // multiplicação
            $result = $num * $i;
            // impressão do resultado
            echo "$num x $i = $result <br>";
          }
          ?>
  </center>
</body>

</html>