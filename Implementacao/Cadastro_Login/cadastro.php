<?php
$nome =$_POST["nome"];
$nomedeusuario = $_POST["nomedeusuario"];
$email =$_POST["email"];
$senha = $_POST["senha"];
$confirmasenha=$_POST["confirmasenha"];

session_start();

if ($senha != $confirmasenha) {    
    $erro = "<p style='color:red;'>As senhas não coincidem</p>";        
    $_SESSION["erro"] = $erro;
    header("Location: formulariodecadastro.php");
    exit();
}

$hash = password_hash($senha, PASSWORD_DEFAULT);

$conn = mysqli_connect("localhost", "root", "", "catalogo_de_livros");

if($conn === false){
    die("Deu ruim mano!" . mysqli_connect_error());
}

$sql1 = "SELECT idusuario FROM usuario WHERE email='$email'";
    $result = mysqli_query($conn, $sql1);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "<p style='color:red;'>E-mail indisponível</p>";        
        $_SESSION["erro"] = $erro;
        header("Location: formulariodecadastro.php");
        exit();
    }


$sql2= "INSERT INTO usuario (nome, nomedeusuario, senha, email) VALUES ('$nome', '$nomedeusuario', '$hash', '$email')";
if(mysqli_query($conn, $sql)){
    session_unset();
    header("Location: formulariodelogin.php");
    exit();
} else{
    die("Deu ruim no cadastro $sql. " . mysqli_error($conn));
}

mysqli_close($conn);

?>
