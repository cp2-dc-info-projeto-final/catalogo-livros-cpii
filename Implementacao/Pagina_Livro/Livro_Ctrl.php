<?php
require 'Livro_Model.php';
$id=$_GET['id'];

$livro=getInformacoes($id);
$generos=getGeneros($id);