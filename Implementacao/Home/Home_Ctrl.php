<?php 
require "../Adicao_de_livros/AdLivro_Model.php";
require "Home_Model.php";
require "../Login/Login_Ctrl2.php";
$generos=mostra_generos();
$ordem=[];
if (isset($_SESSION['email'])){
$preferencias=Preferencia_Usuario($_SESSION['email']);
foreach($preferencias as $preferencia){
    array_push($ordem, $preferencia);
}
foreach($generos as $genero){
    array_push($ordem, $genero);
}
} else{
    foreach($generos as $genero){
        array_push($ordem, $genero);
    }
}
