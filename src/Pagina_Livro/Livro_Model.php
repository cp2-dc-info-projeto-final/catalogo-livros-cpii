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

function verifica_livro($id_livro){
    if (is_numeric($id_livro)){
        $conn=get_connection();
    
        if($conn===false){
            die("Falha na conexão". mysqli_connect_error());
    }
    session_start();
    if (isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $sql="SELECT * FROM lista_usuario WHERE id_livro=$id_livro AND id_usuario=$id";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)==1){
        return true;
    } else {return false;}
    } else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Verifique se você já efetuou o login!!!</p></h1></html>');}
    }
}

function move_livro($id){
    $conn=get_connection();
    
        if($conn===false){
            die("Falha na conexão". mysqli_connect_error());
    }
    session_start();
    if (!isset($_SESSION['id'])){die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Verifique se você já efetuou o login!!!</p></h1></html>');}
    $x=$_SESSION['id'];
    if (verifica_livro($id)==true){
        $sql="DELETE FROM lista_usuario WHERE id_livro=$id AND id_usuario=$x";
    } else if (verifica_livro($id)==false){
        $sql="SELECT * FROM livro WHERE id=$id";
        $result=mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)==0){die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>Livro não encontrado na base de dados!!!</p></h1></html>');}
        $sql="INSERT INTO lista_usuario(id_usuario, id_livro) VALUES ($x, $id)";
    }
    mysqli_query($conn, $sql);

}

function deleta_livro($id){
    $conn=get_connection();
    
        if($conn===false){
            die("Falha na conexão". mysqli_connect_error());
    }
    $sql="DELETE FROM livro WHERE id=$id";
    mysqli_query($conn, $sql);
    $sql="DELETE FROM lista_usuario WHERE id_livro=$id";
    mysqli_query($conn, $sql);
    $sql="DELETE FROM genero_livro WHERE id_livro=$id";
    mysqli_query($conn, $sql);
}