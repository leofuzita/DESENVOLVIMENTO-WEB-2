<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 5 - Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center><h1>Tabuada</h1></center>
    <hr>
<form method="GET" action="destinoget.php">
      <label for="num">Digite um número:</label>
      <input type="number" id="num" name="num" class="form-control-sm" required>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <button type="reset" class="btn btn-warning">Limpar</button>
    </form>
<hr>
<center>
<?php
// número fixo
$num = filter_input(INPUT_GET,"num", FILTER_SANITIZE_SPECIAL_CHARS);
echo"<strong>Tabuada do número: $num </strong>"; 
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

<style>
    body{
        font-size: 2vw;
    }
</style>

</body>
</html>
