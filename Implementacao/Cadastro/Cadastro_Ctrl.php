<?php
require "../Adicao_de_livros/Gen_Ctrl.php";
require "Cadastro_Model.php";
$nome =$_POST["nome"];
$email =$_POST["email"];
$senha = $_POST["senha"];
$confirmasenha=$_POST["confirmasenha"];

session_start();
if ($senha != $confirmasenha) {    
    $erro = "<p style='color:red;'>As senhas não coincidem.</p>";        
   $_SESSION['erro']=$erro;
   header ("Location:Cadastro_View.php");
    exit();
}
if ($_POST['select1']==$_POST['select2'] || $_POST['select2']==$_POST['select3'] || $_POST['select1']==$_POST['select3']){
    $erro ="<p style='color:red;'>Por favor, insira 3 gêneros diferentes.</p>";
    $_SESSION['erro']=$erro;
    header ("Location:Cadastro_View.php");
    exit();
}
    $resposta=Cadastra_Usuario($nome, $email, $senha);
if ($resposta==false){
    $erro="<p style='color:red;'>E-mail indisponível</p>";
    $_SESSION["erro"]= $erro;
    header ("Location:Cadastro_View.php");
    exit();
    
} else {
    session_unset();
    foreach ($generos as $genero) {
        if ($_POST['select1']==$genero['id'] || $_POST['select2']==$genero['id'] || $_POST['select3']==$genero['id']) {
                
            Usuario_Genero($resposta, $genero['id']);
        }
    }
    header("Location:../Login/Login_View.php");
}
