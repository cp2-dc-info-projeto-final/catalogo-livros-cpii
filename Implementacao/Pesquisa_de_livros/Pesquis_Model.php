<?php
  
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

?>