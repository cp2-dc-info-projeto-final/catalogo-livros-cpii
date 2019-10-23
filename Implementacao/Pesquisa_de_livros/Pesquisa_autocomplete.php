<?php  
    require ("Pesquisa_Model.php");

    $chave = $_GET["chave"];
    $resultado_busca = buscarTitulo($chave);
    echo json_encode($resultado_busca);
    
?>