<html>
   
     <meta http-equiv="Content-Type" charset="UTF-8" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
     
   <head>
   <!-- <script scr="js/jquery.js">
    $('#buscar').click(function () (
      buscar($("$palavra").val())
      $.ajax
          ({
            type: "POST"
            dataType:"html"
            url: page
            beforeSend: function(){
                        $("#dados").html("Carregando...");
            },
            data: (palavra:palavra),
            success: function(msg)
            {
               $("#dados").html(msg);
            }
    });
   </script> --->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Pesquisa de livros</title> <!-- nome na aba da página -->
    <meta charset="utf-8">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="botaopesquisastyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pesquisa_style.css">


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
            <a class="nav-link" href="#">Editar Informações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Livros Salvos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Sair_Ctrl.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     <br>
     
  
  <div class="botao_pesquisa" >       
	  <input type="search" class="form-control" id="$palavra" name ="chave" placeholder="Buscar por...">
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
          
          <div class="images">
            <img src='../<?php echo $livro['imagem']?>'><br>
          </div>
        
        
    </div>                 
       <?php }
       ?>
       <div></div>
<?php
      } ?>
    
   
    
  </body><!-- fechamento da tag body --> 
</html>