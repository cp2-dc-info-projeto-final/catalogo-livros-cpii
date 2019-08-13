<?php
session_start();
 require ("AdLivro_Model.php");

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $imagem = $_FILES["arquivo"]["name"];
    $classificacao=$_POST["classificacao"];
    $genero=$_POST["generos"];
    $sinopse = $_POST["sinopse"];
    
    

    if (cadastra_livro($titulo, $autor, $editora, $imagem, $classificacao, $genero, $sinopse)==true)
    {
        move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../Cadastro_Login/Imagens_home/'.$id.'/'.$imagem);
        $msg="<p style='color:green;'>Livro cadastrado com sucesso".$id."</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        
        
    } else {
        $msg="<p style='color:red;'>Já existe um livro com esta classificação</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        
    }
 session_unsset();
    
?>    
