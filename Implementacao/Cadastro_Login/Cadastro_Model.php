<?php

 function Cadastra_Usuario($nome, $email, $senha){
    $conn=mysqli_connect("localhost", "root", "", "catalogo_de_livros");

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }

    $sql="SELECT idusuario FROM usuario WHERE email='$email'";

    $result=mysqli_query($conn, $sql);

    $erro="";
    
    $hash= password_hash($senha, PASSWORD_DEFAULT);

    if (mysqli_num_rows($result)>0){
        return false;
    } 

    $sql="INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$hash')";
    if (mysqli_query($conn, $sql)){
        return true;

    } else{
        die("Erro ao efetuar o cadastro" . mysqli_error($conn));
    }
    mysqli_close($conn);
  
 }
 ?>
