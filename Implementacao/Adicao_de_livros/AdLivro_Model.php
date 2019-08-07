<?php

function cadastra_livro($titulo, $autor, $editora, $sinopse, $imagem){
    $conn= mysqli_connect("localhost", "root", "", "catalogo_de_livros");
    if ($conn===false){
        die ("Falha na conexão!" . mysqli_connect_error());
    }


 <!--  -->
$sql="SELECT idlivro FROM livro WHERE sinopse='$sinopse'";
$result=(mysqli_query($conn, $sql);

if ((mysqli_num_rows($result)>0){
    return false;

    
} else{
    $sql= "INSERT INTO livro (autor, titulo, editora, sinopse, imagem) VALUES ('$autor', '$titulo', '$editora', '$sinopse', '$imagem')";
    

}


    
} else{

    die("Erro ao efetuar o cadastro." . mysqli_error($conn));

}


mysqli_close($conn);

}
