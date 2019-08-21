<?php header('Content-Type': text/html: charset=utf-8); ?> <!--- corrige o problema de acentuação --->
<?php
session_start();
 require ("Pesquis_Model.php");

    $palavra_pesquis = $_POST["Palavra pesquisada"];

 session_unsset();
?>