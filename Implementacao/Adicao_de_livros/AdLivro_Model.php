<?php

function cadastra_livro($titulo, $autor, $editora, $sinopse, $imagem){
    $conn= mysqli_connect("localhost", "root", "", "catalogo_de_livros");
    if ($conn===false){
        die ("Falha na conexão!" . mysqli_connect_error());
    }


$sql1= "INSERT INTO livro (autor, titulo, editora, sinopse, imagem) VALUES 
('$autor', '$titulo', '$editora', '$sinopse', '$imagem')";
$sql2="SELECT idlivro FROM livro WHERE sinopse='$sinopse'";
$result1=(mysqli_query($conn, $sql1))
$result2=(mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2)>0 && mysqli_query($conn, $sql1){

}
if (mysqli_query($conn, $sql)){

    $_UP["pasta"]="../Imagens_home/".$id."/";
    mkdir($_UP["pasta"], 0755, true);

    return true;
} else{

    die("Erro ao efetuar o cadastro." . mysqli_error($conn));

}


mysqli_close($conn);

}
