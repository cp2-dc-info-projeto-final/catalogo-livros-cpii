<?php
  
  function buscar(palavra){

    include_once "../Implementacao/conexao.php";

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
      }

        $sql = "SELECT * FROM livro WHERE nome LIKE '%$palavra%'";
        $query = mysql_query($sql);
        $qtd = mysql_num_rows($query);
        $get = $query->fetch_array();
        if ($qtd > 0) {
          $dados = $get['nome'];
        }
    var page = "Pesquis_Ctrl.php"
   
    
?>