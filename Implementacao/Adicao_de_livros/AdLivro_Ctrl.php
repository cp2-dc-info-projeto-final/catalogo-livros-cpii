<?php
session_start();
 require ("Gen_ctrl.php");

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $sinopse = $_POST["sinopse"];
    $imagem = $_FILES["arquivo"]["name"];    
    
    $insert_id = cadastra_livro($titulo, $autor, $editora, $imagem, $sinopse);
    if (!is_null($insert_id))
    {
        $generos = mostra_generos();

        foreach ($generos as $genero) {
            if (isset($_POST[$genero['nome']])) {
                associa_genero($insert_id, $genero['id']);
            }
        }
     
        mkdir('../Cadastro_Login/Imagens_home/'.$insert_id.'/', 755, true);
        move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../Cadastro_Login/Imagens_home/'.$insert_id.'/'.$imagem);
        $msg="<p style='color:green;'>Livro cadastrado com sucesso</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        exit();
        
        
        
    } else {
        $msg="<p style='color:red;'>Já existe um livro com esta classificação</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        exit();
        
    }

    session_unsset();
    
    
?>    
