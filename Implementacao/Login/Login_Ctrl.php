<?php
 require "Login_Model.php";
 session_start();
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    session_unset();
    if (autentica($email, $senha)== true){
        $moderador=moderador($email);
        header("Location:../Home/Home_View.php");
        exit();
    } else{
        
        $erro= "<p style='color:red;'>Login ou senha incorretos</p>";
        $_SESSION["erro"]=$erro;
        header("Location: Login_View.php");
    }
    
?>