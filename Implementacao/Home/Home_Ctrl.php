<?php 
require "../Adicao_de_livros/AdLivro_Model.php";
require "Home_Model.php";

    $generos=mostra_generos();
    
        $livros=organiza_livros_generos($genero['id']);
        
        

