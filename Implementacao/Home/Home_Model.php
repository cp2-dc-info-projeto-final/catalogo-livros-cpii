<?php
require "../conexao.php";


function Preferencia_Usuario($email){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $sql="SELECT o.nome, id_genero FROM genero AS o JOIN genero_usuario AS g ON o.id=g.id_genero JOIN usuario AS u ON g.id_usuario=u.id WHERE email='$email'";
 $result=mysqli_query($conn, $sql);
 $preferencias=[];
    while($row=mysqli_fetch_assoc($result)){
        $preferencia['id']=$row['id_genero'];
        $preferencia['nome']=$row['nome'];
        array_push($preferencias, $preferencia);   
 }
 mysqli_close($conn);
 return $preferencias;
 
 }  
 



function organiza_livros_generos($id_genero){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
    $sql="SELECT id_livro, titulo, imagem FROM livro AS l JOIN genero_livro AS k 
    ON l.id=k.id_livro WHERE id_genero=$id_genero";
    $result=mysqli_query($conn, $sql);
    $livros= [];

    while($row=mysqli_fetch_assoc($result)){
        $livro['id']=$row['id_livro'];
        $livro["titulo"]=$row['titulo'];
        $livro["imagem"]=$row['imagem'];
        array_push($livros, $livro);   
    }
    return $livros;
    mysqli_close($conn);
}