<?php

function cadastra_livro($titulo, $autor, $editora, $sinopse, $imagem){
    $conn= ,mysqli_connect("localhost", "root", "", "catalogo_de_livro")
    if ($conn===false){
        die ("Falha na conexão!" . mysqli_connect_error());
    }
$sql1= "SELECT id FROM livro WHERE titulo='$titulo'";

$result=mysqli_query($conn, $slq1);

$erro= "";
if (mysqli_num_rows($result)>0) {

    return false;
}
$sql2= "INSERT INTO usuario (titulo, autor, editora, sinopse, imagem) VALUES 
('$titulo', '$autor', '$editora', '$sinopse', '$imagem')";

if (mysqli_query($conn, $sql)){

    return true;

} else{

    die("Erro ao efetuar o cadastro." . mysqli_error($conn));

}

mysqli_close($conn);

}
