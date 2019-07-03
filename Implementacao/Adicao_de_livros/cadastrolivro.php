<?php
session_start();
include_once("../conexao.php");
$titulo = filter_input(INPUT_POST,'titulo');
$autor = filter_input(INPUT_POST,'autor');
$editora = filter_input(INPUT_POST,'editora');
$sinopse = filter_input(INPUT_POST,'sinopse');

$result_livro= "INSERT INTO livro (titulo, autor, editora, sinopse) VALUES ('$titulo', '$autor', '$editora', '$sinopse')";
mysqli_query($conn, $result_livro);
$resultado_livro=mysqli_query($conn, $result_livro);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Livro cadastrado com sucesso</p>";
    header("Location: adicaodelivros.php");
}
else{
    $_SESSION['msg'] = "<p style='color:red;'>Erro: livro não foi cadastrado</p>";
    header("Location: adicaodelivros.php");
}


$conn->close();
?>