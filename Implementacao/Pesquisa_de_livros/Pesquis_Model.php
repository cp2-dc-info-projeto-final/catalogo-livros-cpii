<?php
  

  function buscar(palavra){

    include_once "../Implementacao/conexao.php";



  $sql= "SELECT titulo, autor, sinopse FROM livro JOIN genero on genero.nome";
  

  function buscar(livro){

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

<!---    $.ajax
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
---->

?>

<script>
     var $filterCheckboxes = $('input[type="checkbox"]');

     $filterCheckboxes.on('change'. function() {

       var selectedFilters = {};

       $filterCheckboxes.filter(':checked').each(function(){
         
       })
     })
   </script>

