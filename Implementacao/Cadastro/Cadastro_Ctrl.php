<?php
require "Cadastro_Model.php";
$nome =$_POST["nome"];
$email =$_POST["email"];
$senha = $_POST["senha"];
$confirmasenha=$_POST["confirmasenha"];

session_start();

if ($senha != $confirmasenha) {    
    $erro = "<p style='color:red;'>As senhas não coincidem</p>";        
    $_SESSION["erro"] = $erro;
    header("Location: Cadastro_View.php");
    exit();
}

if (Cadastra_Usuario($nome, $email, $senha)==true){
    session_unset();
    header("Location:../Login/Login_View.php");
} else {
    $erro="<p style='color:red;'>E-mail indisponível</p>";
    $_SESSION["erro"]= $erro;
    header ("Location:Cadastro_View.php");
}
