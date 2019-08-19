<?php

function mostra_generos(){
    include_once"../Implementacao/conexao.php";

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
    }
    $sql="SELECT id, nome FROM genero";
    $result=mysqli_query($conn, $sql);
    $generos[];
    while ($dados=mysqli_fetch_array($result)){
        $genero["id"]=$dados["id"];
        $genero["nome"]=$dados["nome"];
        array_push($generos, $genero);
    
    }
return $generos;
    }

?>
