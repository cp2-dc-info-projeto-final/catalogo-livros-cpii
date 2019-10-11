<?php
session_start();
require "Login_Model.php";
if (isset($_SESSION['email'])){
$moderador=moderador($_SESSION['email']);
$_SESSION['moderador']=$moderador;
}
