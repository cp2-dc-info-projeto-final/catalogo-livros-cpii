<?php
function cadastra_livro($titulo, $autor, $editora, $imagem, $classificacao, $genero, $sinopse){

    $conn=mysqli_connect("localhost", "root", "", "catalogo_de_livros");

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }

    $sql="SELECT id FROM livro WHERE classificacao='$classificacao'";

    $result=mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result)==0){
            $sql="INSERT INTO livro (titulo, autor, editora, imagem, classificacao, idgenero, sinopse) VALUES
            ('$titulo', '$autor', '$editora', '$imagem', '$classificacao', $genero, '$sinopse')";
    
            if (mysqli_query($conn, $sql)) {
                $id=mysqli_insert_id($conn);  
                return $id;
            } else {
                die("Erro ao efetuar o cadastro" . mysqli_error($conn));
            }
    
        } else {
            return null;
        }
    } else {
        die("Erro ao efetuar o cadastro" . mysqli_error($conn));
    }
    
    mysqli_close($conn);
  
 }

 /*
 function funcao_pega_generos() {
$generos = []
for $result {
    $genero['id'] = $id_que_veio_do_banco
    $genero['nome'] = $nome_que_veio_do_banco
    array_push($generos, $genero);
}

return $generos
}
*/
 ?>

 