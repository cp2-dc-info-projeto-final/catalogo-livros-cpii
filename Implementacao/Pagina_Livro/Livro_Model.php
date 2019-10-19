<?php
require "../conexao.php";
function getInformacoes($id_livro){
    if(is_numeric($id_livro)){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
}
$sql= "SELECT autor, titulo, editora, sinopse, imagem FROM livro WHERE id=$id_livro";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result)==1){
    
while($row=mysqli_fetch_assoc($result)){
$livro['autor']=$row['autor'];
$livro['titulo']=$row['titulo'];
$livro['editora']=$row['editora'];
$livro['sinopse']=$row['sinopse'];
$livro['imagem']=$row['imagem'];

}
    return $livro;
} else{
    return false;
}
} else{ return false;
}
}

function getGeneros($id_livro){
    if (is_numeric($id_livro)){
    $conn=get_connection();

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
}
$generos=[];
$sql="SELECT nome FROM livro AS l JOIN genero_livro AS k ON l.id=k.id_livro 
JOIN genero AS g ON k.id_genero=g.id WHERE id_livro=$id_livro";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
    $genero=$row['nome'];
    array_push($generos, $genero);
}
mysqli_close($conn);
return $generos;
}else { return false;}
} 