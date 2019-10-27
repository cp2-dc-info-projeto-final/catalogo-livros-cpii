<?php
session_start();
if (isset($_SESSION['email']) && $_SESSION['moderador']==1) {
require 'Livro_Model.php';
$id=$_GET['id1'];
if (is_numeric($id)){
    deleta_livro($id);
    header('Location: ../Home/Home_View.php');
}
} else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você não tem permissão para fazer isso!!!</p></h1></html>');}