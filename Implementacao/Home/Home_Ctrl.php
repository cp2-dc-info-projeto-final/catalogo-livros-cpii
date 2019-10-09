<?php 
require "../Adicao_de_livros/AdLivro_Model.php";
require "Home_Model.php";

    $generos=mostra_generos();
    $livros_por_genero=[];
    $livros=[];
    foreach($generos as $genero){
        $livros['livros']=organiza_livros_generos($genero['id']);
        $livros["genero"]=$genero['nome'];
        array_push($livros_por_genero, $livros);
        
    }
        

