<?php
session_start();
include_once("conexao.php");
$nomedeusuario=filter_input(INPUT_POST,'nomedeusuario', FILTER_SANITZE_STRING);
$nome=filter_input(INPUT_POST,'nome', FILTER_SANITZE_STRING);
$email=filter_input(INPUT_POST,'email', FILTER_SANITZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha', FILTER_SANITZE_STRING);

$result_usuario = "INSERT INTO usuario (nome, nomedeusuario, email, senha) VALUES ('$nome', '$nomedeusuario', '$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
    $_SESSION ['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
header("Location: Cadastro.php");
}
else{
    $_SESSION ['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
header("Location: Cadastro.php");
      }
      $conn->close();
      ?>