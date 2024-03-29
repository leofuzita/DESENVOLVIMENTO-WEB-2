<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Praticando 5 - Tabelas</title>
</head>

<body>
    <center>
        <h1>Tabelas</h1>
    </center>
    <hr>
    <div class="container-sm">
        <form method="POST" action="index2.php">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Linhas</label>
                <input type="number" class="form-control" min="1" name="linhas" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Colunas</label>
                <input type="number" class="form-control" min="1" name="colunas" id="exampleInputPassword1" required>
            </div>

            <center>
                <label for="estilo">Estilo:</label>
                <select id="estilo" name="estilo">
                    <option value="table-danger">table-danger</option>
                    <option value="table-primary">table-primary</option>
                    <option value="table-dark">table-dark</option>
                    <option value="table-success">table-success</option>
                    <option value="table-warning">table-warning</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Criar tabela">
            </center>
        </form>
    </div>

</body>

</html>