<?php 
require 'Livro_Model.php';
$id=$_GET['id1'];
if (is_numeric($id)){
    move_livro($id);
        Atribui($id);
    }
    header('Location: ../Home/Home_View.php');

