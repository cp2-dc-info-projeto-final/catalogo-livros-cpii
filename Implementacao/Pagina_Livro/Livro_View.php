
<<?php
  require 'Livro_Ctrl.php';
  if($livro===false){
    echo '<html><title>ERRO!</title><h1><p style=\'color:red;\'>Livro não encontrado na base de dados!!!</p></h1></html>';
  } else{
  ?> 

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $livro['titulo'] ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="livrostyle.css">

    

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container" id="menusuperior">
      
      <a class="navbar-brand" href="#">Catálogo de Livros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          if (isset($_SESSION['email']) && $_SESSION['moderador']==1){
          ?>
        <div class="menu">
        <li class="nav-item">
            <a class="nav-link" href="#">Página do Moderador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adicionar Livro</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="../Pesquisa_de_livros/Pesquisa_View.php">Pesquisar
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Editar Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Livros Salvos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Sair.php">Sair</a>
          </li>
        </ul>
          </div>
      </div>

    </div>

  </nav>

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="../<?php echo $livro['imagem']?>" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3><?php echo $livro['titulo']?></h3>
              <p class="descricao"><?php echo $livro['sinopse']?></p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title" id="autor"> Autor: </span> <span class="pro-detail"><?php echo $livro['autor']?></span></li>
                  <li><span class="pro-title" id="editora"> Editora: </span> <span class="pro-detail"><?php echo $livro['editora']?></span></li>
                </ul>
              </div>
              <a href="Livro_Ctrl2.php?id1=<?php echo $_GET['id']?>" class="btn btn-common"><?php if ($verifica==true){?>Remover da Lista<?php } else if($verifica==false){?>Salvar Livro<?php } ?></a>
              <?php
              if (isset($_SESSION['email']) && $_SESSION['moderador']==1) {
              ?>
              <a href="Livro_Ctrl3.php?id1=<?php echo $_GET['id']?>" class="btn btn-danger"> Remover Livro</a>
              <?php
              }
              ?>
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Start -->
    
      
  </body>
</html>
          <?php } ?>
              
              