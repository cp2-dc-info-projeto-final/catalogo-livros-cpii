<?php  
    require ("Pesquisa_Model.php");

    function buscar_livros($chave) {
        $resultado_busca = buscar($chave);
        return $resultado_busca;
    }
    
    
?>