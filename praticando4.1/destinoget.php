<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Calculadora de média</h1>
        <hr>
        <?php

            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            $total = ($n1+$n2+$n3)/3;
           
            ?>
            <p>A media é <?= $total?></p>

            <?php 
                if ($total < 4){
                    echo "<div class='rep'><strong><u>REPROVADO!</u></strong></div>";
                }
                elseif ($total < 6){
                    echo "<div class='rec'><strong><u>RECUPERAÇÂO!</u></strong></div>";
                }
                elseif ($total >= 6){
                    echo "<div class='aprov'><strong><u>APROVADO!</u></strong></div>";
                }
            ?>

            <br>
            
            <a href="form.php">Voltar</a>

        </div>   
        <style>
                .rep{
                    color: red;
                }
                .rec{
                    color: yellow;
                }
                .aprov{
                    color: green;
                }
        </style>
        <strong></strong>
</html>