<?php
 require "AdLivro_Model.php";

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $sinopse = $_POST["sinopse"];
    $imagem = $_FILES["imagem"]["name"];

    session_start();

    if (cadastra_livro($titulo, $autor, $editora, $sinopse, $imagem)==true)
    {
        session_unset();
        $msg="<p style='color:green;'>Livro cadastrado com sucesso</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        
        
        
    } 
    else {
        $msg="<p style='color:red;'>Erro ao cadastrar o livro</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");

    }

    
?>    
