<?php
require "Admin_Model.php";
//if (isset($_SESSION['email']) && $_SESSION['moderador']==1){
if (isset($_GET['id']) && isset($_GET['moderador']) && strlen($_GET['id'])==1 && strlen($_GET['moderador'])==1 ){
    muda_usuario($_GET['id'], $_GET['moderador']);
    header("Location: Admin_View.php");
}
//} else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você não possui permissão para requisitar esta página!!!</p></h1></html>');};