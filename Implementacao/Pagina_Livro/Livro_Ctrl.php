<?php
require 'Livro_Model.php';
if (isset($_GET['id'])){
$id=$_GET['id'];
$verifica=verifica_livro($id);
$livro=getInformacoes($id);
$generos=getGeneros($id);
} else {
    $livro=false;
}

