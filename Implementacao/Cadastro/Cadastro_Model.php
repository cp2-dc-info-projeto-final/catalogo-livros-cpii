<?php

 function Cadastra_Usuario($nome, $email, $senha){
    include_once "../conexao.php";
 $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }

    $sql="SELECT id FROM usuario WHERE email='$email'";

    $result=mysqli_query($conn, $sql);

    $erro="";
    
    $hash= password_hash($senha, PASSWORD_DEFAULT);

    if (mysqli_num_rows($result)>0){
        return false;
    } 

    $sql="INSERT INTO usuario (nome, email, senha, moderador) VALUES ('$nome', '$email', '$hash', false)";
    if (mysqli_query($conn, $sql)){
        return true;

    } else{
        die("Erro ao efetuar o cadastro" . mysqli_error($conn));
    }
    mysqli_close($conn);
  
 }
 ?>
