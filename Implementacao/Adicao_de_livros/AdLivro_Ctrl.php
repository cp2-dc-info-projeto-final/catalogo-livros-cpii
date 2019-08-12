<?php
 include ("AdLivro_Model.php");

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $imagem = $_FILES["arquivo"]["name"];
    $classificacao=$_POST["classificacao"];
    $sinopse = $_POST["sinopse"];
    
    session_start();

    if (cadastra_livro($titulo, $autor, $editora, $imagem, $classificacao, $sinopse)==true)
    {
        
       
        session_unset();
        move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../Cadastro_Login/Imagens_home/'.$id.'/'.$imagem);
        $msg="<p style='color:green;'>Livro cadastrado com sucesso".$id."</p>";
        $_SESSION["msg"]= $msg;
        session_unset();

        header("Location: AdLivro_View.php");
        
    } else {
        $msg="<p style='color:red;'>Já existe um livro com esta classificação</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");

    }

    
?>    
