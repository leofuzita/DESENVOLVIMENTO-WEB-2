<?php
date_default_timezone_set('America/Sao_Paulo');

require 'header.php'
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <div class="row">
        <?php
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<p>ID: $id</p>";
        echo "<p>Nome informado: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>mensagem: $msg</p>";

        require "conexao.php";

        $sql = "update contato SET nome = ?, email = ?, mensagem = ? where id = ?";

        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$nome, $email, $msg, $id]);

        if ($result == true) {
        ?>
            <div class="alert alert-success" role="alert">
                <h4>Dados alterados com sucesso!</h4>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" role="alert">
                <h4>Falha ao efetuar gravação.</h4>
                <p><?php echo $stmt->error; ?></p>
            </div>
        <?php
        }
        ?>

    </div>
    <a href="listagem.php" class="btn btn-info ms-5" role="button">Voltar</a>
</div>

<?php
require 'footer.php'
?>