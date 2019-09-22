<?php 
require "../Adicao_de_livros/AdLivro_Model.php";
require "Home_Model.php";
function organiza_home(){
    $generos=mostra_generos();
    $livros_por_genero=[];
    foreach($generos as $genero){
        $livros=organiza_livros_generos($genero['id']);
        array_push($livros_por_genero, $livros);

    }
    
}

