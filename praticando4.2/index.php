<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando - Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php
    $animal = $_GET['animal'] ?? '';

    function retornaTextoanimal($animal) {
        switch($animal) {
            case 'Gato':
                echo "<p>O gato (felis catus) é um mamífero carnívoro e quadrúpede pertencente à família Felidae e à ordem carnívora.
                É um animal doméstico apreciado por caçar ratos e ratazanas. Este animal possui unhas retráteis,
                ouvidos e olfação bem aguçados, uma notável visão noturna e um corpo flexível, musculoso e compacto.
                Trata-se de um animal com boa memória e com capacidade de aprender por meio da observação e da experiência.</p>";
                break;
            case 'Cachorro':
                echo "<p>Os canídeos são animais de médio a pequeno porte, que se alimentam predominantemente de carne.
                Raposas, chacais, coiotes, mabecos, lobos e cachorros pertencem a esta família.</p>";
                break;
            case 'Papagaio':
                echo "<p>O papagaio-verdadeiro (Amazona aestiva) é uma ave pertencente à ordem Psittaciforme e família Psittacidae, cujo gênero Amazona (papagaios)
                é o mais diverso. Possui asas arredondadas, largas e curtas. Não apresenta dimorfismo sexual de plumagem, sendo predominantemente verde,
                com cabeça amarela e fronte azul-esverdeada. Mede de 35 a 37 cm de comprimento e pesa cerca de 400g. </p>";
                break;
            case 'Capivara':
                echo "<p>As capivaras (Hydrochoerus hydrochaeris) são mamíferos herbívoros que se destacam por levarem o título 
                de maior roedor do mundo. Esses animais apresentam um corpo robusto e musculoso coberto por pelos marrom-escuros 
                e podem atingir cerca de 1,3 m de comprimento e 60 cm de altura. Seu peso varia, e esses mamíferos apresentam,
                em média, de 20 kg a 80 kg.</p>";
                break;
        }
    }
    ?>
    <style>
        body{
            background: lightblue;
        }
    </style>
</head>
<body class="p-3">
    <header class="mb-5">
        <center>
        <h1>Praticando - Animais</h1>
        </center>
    </header>
    <main>
        <?php
        if ($animal == '') {
            echo "<div class='d-flex'>
            <a style='width:28%' href='./?animal=Gato'>
                <img src='gato.jpg' style='width:100%;'/>
            </a>
            <a style='width:27%' href='./?animal=Cachorro'>
                <img src='cachorro.jpg' style='width:100%;'/>
            </a>
            <a style='width:26%' href='./?animal=Papagaio'>
                <img src='papagaio.jpg' style='width:100%;'/>
            </a>
            <a style='width:25%' href='./?animal=Capivara'>
                <img src='capivara.jpg' style='width:100%;'/>
            </a>
            </div>";
        }
        else if ($animal == 'Gato') {
            echo "<div style='display:flex; flex-direction: column;'>
            <p>Você clicou em um <b>$animal</b>.</p>
            <img style='width: 30%' src='./$animal.jpg' />";
            retornaTextoanimal($animal);
            echo "<a href='./'>Voltar</a>
            </div>";
        }
        else if ($animal == 'Cachorro') {
                echo "<div style='display:flex; flex-direction: column;'>
                <p>Você clicou em um <b>$animal</b>.</p>
                <img style='width: 30%' src='./$animal.jpg' />";
                retornaTextoanimal($animal);
                echo "<a href='./'>Voltar</a>
                </div>";
            }
        else if ($animal == 'Capivara') {
                echo "<div style='display:flex; flex-direction: column;'>
                <p>Você clicou em um <b>$animal</b>.</p>
                <img style='width: 30%' src='./$animal.jpg' />";
                retornaTextoanimal($animal);
                echo "<a href='./'>Voltar</a>
                </div>";
            }
 else {
            echo "<div style='display:flex; flex-direction: column;'>
            <p>Você clicou em um <b>$animal</b>.</p>
            <img style='width: 30%' src='./$animal.jpg' />";
            retornaTextoanimal($animal);
            echo "<a href='./'>Voltar</a>
            </div>";
        }
        ?>
    </main>
    
</body>
</html>