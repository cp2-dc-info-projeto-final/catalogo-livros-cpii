<?php

$conn = mysqli_connect("localhost", "root", "", "catalogo_de_livros");
    $nomedeusuario = $_POST["nomedeusuario"];
    $senha = $_POST["senha"];
    
    if($conn === false){
        die("Deu ruim mano!" . mysqli_connect_error());
    }
    session_start();
    
    $sql = "SELECT senha,nome FROM usuario WHERE nomedeusuario='$nomedeusuario'";
    $result = mysqli_query($conn, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            $hash = $row["senha"];
            if (password_verify($senha, $hash)) {
                session_unset();
                $_SESSION["nome"] = $row["nome"]; 
                header("Location: home.php");
                exit();
            } else {
                $erro = "<p style='color:red;'>Algum campo está incorreto.</p>";        
                $_SESSION["erro"] = $erro;
                header("Location: formulariodelogin.php");
                exit();
            }
        }
    } else {
        $erro = "<p style='color:red;'>Algum campo está incorreto.</p>";
        $_SESSION["erro"] = $erro;
        header("Location: formulariodelogin.php");
        exit();
    }        
    mysqli_close($conn);
    
?>