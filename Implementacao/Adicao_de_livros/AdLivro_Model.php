<?php
function cadastra_livro($titulo, $autor, $editora, $imagem, $sinopse){

    include_once "../conexao.php";
    $conn = get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }

    
        
            $sql="INSERT INTO livro (titulo, autor, editora, imagem, sinopse) VALUES
            ('$titulo', '$autor', '$editora', '$imagem', '$sinopse')";
    
            if (mysqli_query($conn, $sql)) {
                $id=mysqli_insert_id($conn);
                $sql="UPDATE livro SET imagem='Imagens_Livros/$id/$imagem'
                WHERE livro.id=$id";
                mysqli_query($conn, $sql);  
                return $id;
            } else {
                die("Erro ao efetuar o cadastro" . mysqli_error($conn));
            }
    
        
        
     
    
    mysqli_close($conn);
  
 }



function mostra_generos(){
    include_once "../conexao.php";
    $conn = get_connection();
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
function associa_genero($livro_id, $genero_id){
    include_once "../conexao.php";
    $conn = get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }
    
    $sql= "INSERT INTO genero_livro(idlivro, idgenero) VALUES ($livro_id, $genero_id )";
    if (!mysqli_query($conn, $sql))
    {
        die("Erro ao associar gênero" . mysqli_error($conn));
    }
    mysqli_close($conn);
    
}

?>
 