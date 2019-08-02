<?php
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $sinopse = $_POST["sinopse"];
    $imagem = $_POST["imagem"];

    session_start();

    $conn = mysqli_connect("localhost", "root", "", "catalogo_de_livros");
    if cadastra_livro($titulo, $autor, $editora, $sinopse, $imagem)==true{
        session_unset();
        $msg="<p style='color:green;'>Livro cadastrado com sucesso</p>";
        $_SESSION["msg"]= $msg;
        header("Location: Adicaodelivros_View.php");
        
    } else {
        $msg="<p style='color:red;'>Erro ao cadastrar o livro</p>";
        $_SESSION["msg"]= $msg;
        header("Location: Adicaodelivros_View.php");

    }

    
?>    
