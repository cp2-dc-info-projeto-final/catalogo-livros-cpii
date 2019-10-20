<?php
session_start();
require "Login_Model.php";
if (isset($_SESSION['email'])){
$usuario=moderador($_SESSION['email']);
$_SESSION['moderador']=$usuario['moderador'];
$_SESSION['id']=$usuario['id'];
}
