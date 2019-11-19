<?php 
require "../Adicao_de_livros/AdLivro_Model.php";
require "Home_Model.php";
require "../Login/Login_Ctrl2.php";
if (isset($_SESSION['email'])){
$ordem=Preferencia_Usuario($_SESSION['email']);
$lista=lista($_SESSION['id']);
} else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você ainda não efetuou o login!!!</p></h1></html>'); }
$up=mostra_generos();
if (isset($_SESSION['autor'])){
    $recomendacao=Recomenda($_SESSION['autor']);
}


