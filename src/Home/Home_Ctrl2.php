<?php
session_start();
if (isset($_SESSION['id'])){
    require "../Cadastro/Cadastro_Model.php";
    require "../Adicao_de_Livros/AdLivro_Model.php";
 if ($_POST['select1']==$_POST['select2'] || $_POST['select2']==$_POST['select3'] || $_POST['select1']==$_POST['select3']
     || $_POST['select1']==$_POST['select4'] || $_POST['select2']==$_POST['select4'] || $_POST['select3']==$_POST['select4']){
    $erro ="<p style='color:red;'>Por favor, insira 3 gêneros diferentes.</p>";
    $_SESSION['erro']=$erro;
    header ("Location: Home_View.php");
    exit(); }
    Limpa($_SESSION['id']);
    $generos=mostra_generos();
    foreach ($generos as $genero) {
        if ($_POST['select1']==$genero['id'] || $_POST['select2']==$genero['id'] || $_POST['select3']==$genero['id'] || $_POST['select4']==$genero['id']) {    
            Usuario_Genero($_SESSION['id'], $genero['id']);
        }
    }
    header ("Location: Home_View.php");
 } else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você ainda não efetuou o login!!!</p></h1></html>'); }