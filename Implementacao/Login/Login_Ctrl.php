<?php
 include "Login_Model.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    session_start();
    if (autentica($email, $senha)== true){
        session_unset();
        $_SESSION["nome"]= $row["nome"];
        header("Location:../home.php");
        exit();
    } else{
        $erro= "<p style='color:red;'>Login ou senha incorretos</p>";
        $_SESSION["erro"]=$erro;
        header("Location: Login_View.php");
    }
    
    
    
?>