<?php
Class Livro_Ctrl{
    function Post_livro(){
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $editora=$_POST['editora'];
        $sinopse=$_POST['sinopse'];
        $imagem=$_FILES['arquivo']['name'];
    }

}

