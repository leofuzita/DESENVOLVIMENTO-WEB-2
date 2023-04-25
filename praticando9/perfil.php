<?php
session_start();
require 'header.php';
date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
    header("Location: entrar.php");
}
?>

<div class="bg-light p-4 mb-4 rounded">
    <h1 class="text-center">Perfil</h1>
</div>
    <p>Nome: <strong>Leonardo</strong></p>
    <p>Email: <strong>leo@gmail.com</strong></p>
    <p>Telefone: <strong>17981767310</strong></p>
    <p>Endereço: <strong>Rua Bahia, nº0</strong></p>
    <p>Cidade: <strong>Votuporanga</strong></p>
    <p>Estado: <strong>São Paulo</strong></p>

<?php
 if(isset($_COOKIE['cookie'])){
    echo"Você ja visitou essa pagina em: " . date('d-m-Y H:i:s');
 }else{
    echo"Você NUNCA passou por aqui.";
    setcookie('cookie','algum valor...', time()+3600);
 }
require 'footer.php';
?>