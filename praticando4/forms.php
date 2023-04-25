<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Destino</h1>
    <hr>
    <?php
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>Nome informado: $name<br>Email: $email</p>";
    ?>  
    <br>
    <p>
        <a href="forms.html">VOLTAR PARA O FORMULÁRIO</a>
    </p>

    <style>
        body{
            background-color: <?php echo $cor;?>;
        }
    </style>
</body>
</html>