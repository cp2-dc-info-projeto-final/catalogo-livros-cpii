<?php
function cadastra_livro($titulo, $autor, $editora, $imagem, $classificacao, $sinopse){
    $conn=mysqli_connect("localhost", "root", "", "catalogo_de_livros");

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $sql="SELECT id FROM livro WHERE classificacao='$classificacao'";
 $result=mysqli_query($conn, $sql);
 if (mysqli_num_rows($result)>0){
    return false;
} else if (mysqli_num_rows($result)==0){
    $sql="INSERT INTO livro (titulo, autor, editora, imagem, classificacao, sinopse) VALUES
    ('$titulo', '$autor', '$editora', '$imagem', '$classificacao', '$sinopse')";
    $result=(mysqli_query($conn, $sql));
    $id=mysqli_insert_id($conn);  
    session_unset();
    mkdir('../Cadastro_Login/Imagens_home/'.$id.'/', 755, true);
    return true;
}  else{
        die("Erro ao efetuar o cadastro" . mysqli_error($conn));
    }
    mysqli_close($conn);
  
 }
 ?>
