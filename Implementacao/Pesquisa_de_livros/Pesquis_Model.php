<?php
  
<<<<<<< HEAD
  $sql= "SELECT titulo, autor, sinopse FROM livro JOIN genero on genero.nome";
  
=======
  function buscar(livro){
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
        $sql = "SELECT * FROM livro WHERE nome LIKE '%$palavra%'";
        $query = mysql_query($sql);
        $qtd = mysql_num_rows($query);
 }
    var page = "Pesquis_Ctrl.php"
    $.ajax
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
>>>>>>> 03021fc54a44854f86c907a437ae2b6a31917ea9

?>

<script>
     var $filterCheckboxes = $('input[type="checkbox"]');

     $filterCheckboxes.on('change'. function() {

       var selectedFilters = {};

       $filterCheckboxes.filter(':checked').each(function(){
         
       })
     })
   </script>