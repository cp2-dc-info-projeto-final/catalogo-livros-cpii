<?php
session_start();
 require ("Gen_ctrl.php");

    $titulo=addslashes($_POST['titulo']);
    $autor = addslashes($_POST['autor']);
    $editora=addslashes($_POST['editora']);
    $sinopse =addslashes($_POST['sinopse']);
    $imagem=$_FILES["arquivo"]["name"];
        $img=addslashes($imagem);
    
    $insert_id = cadastra_livro($titulo, $autor, $editora, $img, $sinopse);
    if (!is_null($insert_id))
    {
        foreach ($generos as $genero) {
            if (isset($_POST[$genero['nome']])) {
                associa_genero($insert_id, $genero['id']);
            }
        }
     
        mkdir('../Imagens_Livros/'.$insert_id.'/', 755, true);
        move_uploaded_file
        ($_FILES["arquivo"]["tmp_name"],'../Imagens_Livros/'.$insert_id.'/'.$imagem);
        $msg="<p style='color:green;'>Livro cadastrado com sucesso</p>";
        $_SESSION["msg"]= $msg;
        header("Location: AdLivro_View.php");
        exit();
        
        
        
    } 
    
    
?>    
