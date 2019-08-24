<?php  
session_start();
 require ("Pesquis_Model.php");

    $titulo_pesquisado = $_GET["Palavra pesquisada"];
    $dados =(buscar($titulo_pesquisado))
    
     buscar($titulo_pesquisado);
    
 

 session_unsset();
?>