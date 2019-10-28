<?php 
require "../Adicao_de_livros/AdLivro_Model.php";
require "Home_Model.php";
require "../Login/Login_Ctrl2.php";
if (isset($_SESSION['email'])){
$ordem=Preferencia_Usuario($_SESSION['email']);
$lista=lista($_SESSION['id']);
} else {$ordem=mostra_generos();}
$up=mostra_generos();

