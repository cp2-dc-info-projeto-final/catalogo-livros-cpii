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
  

   <form action="Pesquisa_View.php" method="get"> <!-- estrutura form que agrupa todo o forumulário -->
    
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Catálogo de Livros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Página do Moderador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adicionar Livro</a>
          </li>
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
            <a class="nav-link" href="#">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
     <br>
     
  <!-- <input type="checkbox" name="Biografia" value="c1" /> Biografia
   <input type="checkbox" name="Clássicos" value="c2" /> Clássicos
   <input type="checkbox" name="Suspense" value="c3" /> Suspense
   <input type="checkbox" name="Conto" value="c4" /> Conto
   <input type="checkbox" name="Drama" value="c5" /> Drama
   <input type="checkbox" name="Economia" value="c6" /> Economia
   <input type="checkbox" name="Fantasia" value="c7" /> Fantasia
   <input type="checkbox" name="Ficção" value="c8" /> Ficção
   <input type="checkbox" name="Didático" value="c9" /> Didático
   <input type="checkbox" name="Filosofia" value="c10" /> Filosofia
   <input type="checkbox" name="Horror" value="c11" /> Horror
   <input type="checkbox" name="HQs" value="c12" /> HQs
   <input type="checkbox" name="Humor" value="c13" /> Humor
   <input type="checkbox" name="Mangá" value="c14" /> Mangá
   <input type="checkbox" name="Romance" value="c15" /> Romance
   <input type="checkbox" name="Ciências" value="c16" /> Ciências
   <input type="checkbox" name="História" value="c17" /> História
   <input type="checkbox" name="Matemática" value="c18" /> Matemática
   <input type="checkbox" name="Geografia" value="c19" /> Geografia
   <input type="checkbox" name="Poesia" value="c20" /> Poesia
   <input type="checkbox" name="Sociologia" value="c21" /> Sociologia
   <input type="checkbox" name="Línguas" value="c22" /> Línguas -->

   
     
  
  <div class="botao_pesquisa" >       
	  <input type="search" class="form-control" id="$palavra" name ="chave" placeholder="Buscar por...">
  </div>
  
  
  
  
  
  
     
    <?php 
      require "Pesquisa_Ctrl.php";

      if (isset($_GET["chave"])) {
        $chave = $_GET["chave"]; ?>
        <div class="resultado">
          <?php
        $resultado = buscar_livros($chave);
        foreach ($resultado as $livro) {
          ?>
          <div class="resultado__detalis">
            <div class=resultado__title><?php echo $livro['titulo'] ?> <br>
            </div>
          </div>
            <div class="resultado__img"> <img src='../<?php echo $livro['imagem']?>'><br>
            </div>
        
       <?php }
       ?>
       </div>
<?php
      } ?>
    
   
    
  </body><!-- fechamento da tag body --> 
</html>