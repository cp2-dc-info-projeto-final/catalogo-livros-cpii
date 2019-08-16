<?php
  
  $sql= "SELECT titulo, autor, sinopse FROM livro JOIN genero on genero.nome";
  

?>

<script>
     var $filterCheckboxes = $('input[type="checkbox"]');

     $filterCheckboxes.on('change'. function() {

       var selectedFilters = {};

       $filterCheckboxes.filter(':checked').each(function(){
         
       })
     })
   </script>