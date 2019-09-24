<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/index.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  
  <title>
    Home
  </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Catálogo de Livros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Pesquisar
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

    <div class="contain">

    

          <div class="slider">
          <h3>HQ's</h3>
          <span onmouseover="scrollEsquerda()" onmouseout="clearScroll()" class="handle handlePrev active">
            <i class="fa fa-caret-left" aria-hidden="true"></i>
          </span>
    
          <div id="scroller" class="row">
            <div class="row__inner">
            <?php
      require "Home_Model.php";
      $id_genero=12;
      $livros=organiza_livros_generos($id_genero);
      foreach($livros as $livro){
        echo("<div class=\"gui-card\">
        <div class=\"gui-card__media\">
          <img class=\"gui-card__img\" src=\"../".$livro["imagem"]."\" alt=\"\"  />
        </div>
        <div class=\"gui-card__details\">
          <div class=\"gui-card__title\">
            Ação Humana
          </div>
        </div>
      </div>");
      }
      ?>                                                            
            </div>
    
          </div>
          <span onmouseover="scrollDireita()" onmouseout="clearScroll()"  class="handle handleNext active">
            <i class="fa fa-caret-right" aria-hidden="true"></i>
          </span>
        </div>






</div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>