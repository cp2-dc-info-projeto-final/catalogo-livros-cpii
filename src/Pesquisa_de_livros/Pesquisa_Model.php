<?php
  include_once ('../conexao.php');

  function buscar($chave){

    $conn = get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }
    $sql = "SELECT id, imagem FROM livro WHERE 
    titulo LIKE '%$chave%'
    OR autor LIKE '%$chave%'
    OR editora LIKE '%$chave%' ORDER BY titulo ASC";
    
    $livros = [];

    if ($query = mysqli_query($conn, $sql))
    {
      if (mysqli_num_rows($query) > 0) {
        while ($row=mysqli_fetch_assoc($query)){
          $livro["id"]=$row['id'];
          $livro["imagem"]=$row['imagem'];
          array_push($livros, $livro);
        }
      }
    } else {
      die("Falha na consulta" . mysqli_error($conn));
    }

    mysqli_close($conn);
    return $livros;
  }
  

  function buscarTitulo($chave){

    $conn = get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }
    $sql = "SELECT titulo FROM livro WHERE 
    titulo LIKE '%$chave%'
    OR autor LIKE '%$chave%'
    OR editora LIKE '%$chave%'";
    
    $livros = [];

    if ($query = mysqli_query($conn, $sql))
    {
      if (mysqli_num_rows($query) > 0) {
        while ($row=mysqli_fetch_assoc($query)){
          $titulo=$row['titulo'];
          array_push($livros, $titulo);
        }
      }
    } else {
      die("Falha na consulta" . mysqli_error($conn));
    }

    mysqli_close($conn);
    return $livros;
  }
?>