<?php
 require "Login_Model.php";
 session_start();
    $email=preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);
    $senha=preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);

    $_SESSION['email']= $email;
    session_unset();
    if (autentica($email, $senha)== true){
        session_start();
        $_SESSION['email']= $email;
        header("Location:../Home/Home_View.php");
        exit();
    } else{
        
        $erro= "<p style='color:red;'>Login ou senha incorretos</p>";
        $_SESSION["erro"]=$erro;
        header("Location: ../Login/Login_View.php");
    }
    
?>