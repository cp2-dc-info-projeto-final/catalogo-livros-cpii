<?php
  include_once ('conexao.php');

  function buscar ($livro){

    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
      }
      $sql = "SELECT * FROM livro WHERE nome LIKE '%$titulo_pesquisado%'";
      $query = mysqli_query($conn, $sql);
      if (mysqli_num_rows($query) > 0) {
        $dados = [];
        while ($dados=mysqli_fetch_array($query)){
          $dados["titulo"]=$query
        }
        
  

  

  /*

    
    $qtd = mysql_num_rows($query);
    $get = $query->fetch_array();
    if ($qtd > 0) {
      $dados = get['$nome'];
    }else { 
      echo "Nenhum resultado encontrado.";
    }
   
    mysqli_close($conn);

    return $dados;
   
    
  }*/

/*    $.ajax
          ({
            type: "POST"
            dataType:"html"
            url: page
            beforeSend: function(){
                        $("#dados").html("Carregando...");
            },
            data: (palvra:palavra),
            success: function(msg)
            {
               $("#dados").html(msg);
            }
          }); 





   <script var $filterCheckboxes = $('input[type="checkbox"]');

     $filterCheckboxes.on('change'. function() {

       var selectedFilters = {};

       $filterCheckboxes.filter(':checked').each(function(){
         
       })
     })
   /script> */
?>