<?php
require "../conexao.php";
organiza_livros_generos($id_genero);
function organiza_livros_generos($id_genero){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
    $sql="SELECT autor, titulo, editora, sinopse, imagem FROM livro AS l JOIN genero_livro AS k 
    ON l.id=k.id_livro JOIN genero AS g ON k.id_genero=g.id WHERE id_genero=$id_genero";
    $result=mysqli_query($conn, $sql);
    $livros= [];

    while($row=mysqli_fetch_assoc($result)){
        $livro["titulo"]=$row['titulo'];
          $livro["autor"]=$row['autor'];
          $livro["sinopse"]=$row['sinopse'];
          $livro["imagem"]=$row['imagem'];
          $livro["editora"]=$row['editora'];
          array_push($livros, $livro);   
    }
    return $livros;

}