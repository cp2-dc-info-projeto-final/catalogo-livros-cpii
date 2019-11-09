<?php
require "../conexao.php";


function Preferencia_Usuario($email){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $sql="SELECT id_genero, g.nome FROM usuario AS u JOIN  genero_usuario AS k ON u.id=k.id_usuario JOIN genero AS g ON k.id_genero=g.id WHERE email='$email'";
 $result=mysqli_query($conn, $sql);
 if ($result===false){die (mysqli_error($conn));}
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
    mysqli_close($conn);
    return $livros;
}

function lista($id_usuario){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $lista=[];
 $sql="SELECT l.id, l.titulo, l.imagem FROM livro AS l JOIN lista_usuario AS a ON l.id=a.id_livro JOIN usuario AS u ON a.id_usuario=u.id WHERE u.id=$id_usuario";
 $result=mysqli_query($conn, $sql);
 while ($row=mysqli_fetch_assoc($result)){
     $livro['id']=$row['id'];
     $livro['titulo']=$row['titulo'];
     $livro['imagem']=$row['imagem'];
     array_push($lista, $livro);
 }
 mysqli_close($conn);
 return $lista;
}
