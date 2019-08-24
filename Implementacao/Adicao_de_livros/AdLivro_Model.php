<?php
function cadastra_livro($titulo, $autor, $editora, $imagem, $classificacao, $genero, $sinopse){

    include_once "../conexao.php";

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }

    $sql="SELECT id FROM livro WHERE classificacao='$classificacao'";

    $result=mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result)==0){
            $sql="INSERT INTO livro (titulo, autor, editora, imagem, classificacao, sinopse) VALUES
            ('$titulo', '$autor', '$editora', '$imagem', '$classificacao', '$sinopse')";
    
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



function mostra_generos(){
    include_once "../conexao.php";

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }
    $sql="SELECT id, nome FROM genero";
    $result=mysqli_query($conn, $sql);
    $generos = [];
    while ($dados=mysqli_fetch_array($result)){
        $genero["id"]=$dados["id"];
        $genero["nome"]=$dados["nome"];
        array_push($generos, $genero);
    
    }
    
    mysqli_close($conn);
    return $generos;
    }


?>
 