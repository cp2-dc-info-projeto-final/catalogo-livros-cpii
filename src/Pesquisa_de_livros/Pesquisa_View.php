<html>
   
     <meta http-equiv="Content-Type" charset="UTF-8" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
     
   <head>
 
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Pesquisa de livros</title> <!-- nome na aba da página -->
    <meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="botaopesquisastyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pesquisa_style.css">
    <script src="../js/external/jquery/jquery.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
  
    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    
    <script>

     // $(document).ready( function() {

      // Single Select
     // $( "#busca" ).autocomplete({
       // source: function( request, response ) {
          // Fetch data
        //  $.ajax({
        //  url: "Pesquisa_autocomplete.php",
        //  type: 'post',
        //  dataType: "json",
        //  data: request,
         // success: function( data ) {
         //   response( data );
        //  },
        //  error: function(jqXHR, textStatus, errorThrown){
        //             console.log( textStatus);          
        //             console.log(jqXHR.responseText)        
        //  }
        //  });
      //  }
    //  });

  //  });
      
   </script>

  </head>

  <body> <!-- tag pra início do corpo do site -->
  

   <form class="pesquisa" action="Pesquisa_View.php" method="get"> <!-- estrutura form que agrupa todo o forumulário -->
    
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Catálogo de Livros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <?php
          if (isset($_SESSION['email']) && $_SESSION['moderador']==1){
          ?>
        <li class="nav-item">
            <a class="nav-link" href="#">Página do Moderador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adicionar Livro</a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="../Home/Home_View.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     <br>
     
  
  <div class="botao_pesquisa" >       
	  <input type="search" class="form-control" id="busca" name="chave" placeholder="Buscar por...">
  </div>
  
  
  
  
  
  
  <div class="resultado"> 
    <?php 
      require "Pesquisa_Ctrl.php";

      if (isset($_GET["chave"])) {
        $chave = $_GET["chave"]; ?>
        
          <?php
        $resultado = buscar_livros($chave);
        foreach ($resultado as $livro) {
          ?>
          
          <div class="images" onclick="window.location.href='../Pagina_Livro/Livro_View.php?id=<?php echo $livro['id']?>'">
            <img src='../<?php echo $livro['imagem']  ?>'><br>
          </div>
        
        
    </div>                 
       <?php }
       ?>
       <div></div>
<?php
      } ?>
    
   
    
  </body><!-- fechamento da tag body --> 
</html>