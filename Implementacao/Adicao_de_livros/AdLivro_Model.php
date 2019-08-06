<?php

function cadastra_livro($titulo, $autor, $editora, $sinopse, $imagem){
    $conn= mysqli_connect("localhost", "root", "", "catalogo_de_livros");
    if ($conn===false){
        die ("Falha na conexão!" . mysqli_connect_error());
    }


$sql= "INSERT INTO livro (autor, titulo, editora, sinopse, imagem) VALUES 
('$autor', '$titulo', '$editora', '$sinopse', '$imagem')";

if (mysqli_query($conn, $sql)){
    $id=mysqli_insert_id($conn);

    $_UP["pasta"]="../Imagens_home/".$id."/";
    mkdir($_UP["pasta"], 0777, true);

    return true;
} else{

    die("Erro ao efetuar o cadastro." . mysqli_error($conn));

}


mysqli_close($conn);

}
