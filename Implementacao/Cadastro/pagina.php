<?php
session_start();
include_once("../conexao.php");
$nome = filter_input(INPUT_POST,'nome');
$nomedeusuario = filter_input(INPUT_POST,'nomedeusuario');
$email = filter_input(INPUT_POST,'email');
$senha = filter_input(INPUT_POST,'senha');

$result_usuario= "INSERT INTO usuario (nome, nomedeusuario, email, senha) VALUES ('$nome', '$nomedeusuario', '$email', '$senha')";
mysqli_query($conn, $result_usuario);
$resultado_usuario=mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
header("Location: formulariodecadastro.php");
}
else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
header("Location: formulariodecadastro.php");
      }


      $conn->close();
?>