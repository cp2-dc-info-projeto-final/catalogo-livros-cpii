<?php
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $sinopse = $_POST["sinopse"];
    $imagem=$_POST["imagem"];

    session_start();

    $conn = mysqli_connect("localhost", "root", "", "catalogo_de_livros");
    if($conn === false){
        die("Deu ruim mano!" . mysqli_connect_error());
    }

        $sql = "INSERT INTO livro (titulo, autor, editora, sinopse, imagem) VALUES
            ('$titulo', '$autor', '$editora', '$sinopse', '$imagem')";
            if(mysqli_query($conn, $sql)){
                $msg="<p style='color:green;'>Livro cadastrado com sussesso</p>";
                $_SESSION["msg"]=$msg;
                header("Location: adicaodelivros.php");
            }
            else{
                die("Algo deu errado $sql.". mysqli_error($connection));
            }
    
