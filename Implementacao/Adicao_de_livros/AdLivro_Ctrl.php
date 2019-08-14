<?php
session_start();
 require ("AdLivro_Model.php");

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $classificacao=$_POST["classificacao"];
    $genero=$_POST["generos"];
    $sinopse = $_POST["sinopse"];
    $imagem = $_FILES["arquivo"]["name"];
    
    
    
    $insert_id = cadastra_livro($titulo, $autor, $editora, $imagem, $classificacao, $genero, $sinopse);
    if (!is_null($insert_id))
    {
    
        mkdir('../Cadastro_Login/Imagens_home/'.$insert_id.'/', 755, true);
        move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../Cadastro_Login/Imagens_home/'.$insert_id.'/'.$imagem);
        $msg="<p style='color:green;'>Livro cadastrado com sucesso".$insert_id."</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        
        
    } else {
        $msg="<p style='color:red;'>Já existe um livro com esta classificação</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        
    }
 session_unsset();
    
?>    
