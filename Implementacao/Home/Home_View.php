<html>
<?php
      require "Home_Ctrl.php";
?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="selectstyle.css">
  
  <script src="js/index.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
      <!-- Main Style -->
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <!-- Responsive Style -->

      <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  
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
          <?php
          if (isset($_SESSION['email']) && $_SESSION['moderador']==1){
          ?>
        <li class="nav-item">
            <a class="nav-link" href="../Pagina_Administrador/Admin_View.php">Página do Moderador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adicionar Livro</a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="../Pesquisa_de_livros/Pesquisa_View.php">Pesquisar
              <span class="sr-only">(current)</span>
            </a>
          </li>
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
  </nav>



  


  <?php if (isset($lista) && count($lista)>0){ $list=0; ?>
  
  <div class="contain">
    <div class="slider">
      <h3>Minha Lista</h3>
      <span onmouseover="scrollEsquerda(<?php echo $list ?>)" onmouseout="clearScroll()" class="handle handlePrev active">
        <i class="fa fa-caret-left" aria-hidden="true"></i>
      </span>

      <div id="<?php echo 'scroller-'.$list?>" class="row">
        <div class="row__inner">
          <?php
            shuffle($lista);
            foreach($lista as $livro){

          ?>
              
          <div class="gui-card" onclick="window.location.href='../Pagina_Livro/Livro_View.php?id=<?php echo $livro['id']?>'">
            <div class="gui-card__media">
                  <img class="gui-card__img" src="../<?php echo $livro['imagem']?>" alt=""  />
            </div>
              <div class="gui-card__details">
                <div class="gui-card__title">
                    <?php echo $livro['titulo']?>
                </div>
              </div>
            </div>
              <?php    
            }
          
          ?>     

                                                                 
        </div>
      </div>
      <span onmouseover="scrollDireita(<?php echo $list ?>)" onmouseout="clearScroll(<?php echo $list ?>)"  class="handle handleNext active">
        <i class="fa fa-caret-right" aria-hidden="true"></i>
      </span>
    </div>
          <?php } ?>
              






  
  <div class="contain">

    <?php
      foreach($ordem as $genero) {
    ?>
    <div class="slider">
      <h3><?php echo $genero['nome']?></h3>
      <span onmouseover="scrollEsquerda(<?php echo $genero['id']?>)" onmouseout="clearScroll(<?php echo $genero['id']?>)" class="handle handlePrev active">
        <i class="fa fa-caret-left" aria-hidden="true"></i>
      </span>

      <div id="<?php echo 'scroller-'.$genero['id']?>" class="row">
        <div class="row__inner">
          <?php
            
            $livros=organiza_livros_generos($genero['id']);
            shuffle($livros);
            foreach($livros as $livro){

          ?>
              
              <div class="gui-card" onclick="window.location.href='../Pagina_Livro/Livro_View.php?id=<?php echo $livro['id']?>'">
                <div class="gui-card__media">
                  <img class="gui-card__img" src="../<?php echo $livro['imagem']?>" alt=""  />
                </div>
                <div class="gui-card__details">
                  <div class="gui-card__title">
                    <?php echo $livro['titulo']?>
                  </div>
                </div>
              </div>
          <?php    
            }
          
          ?>     

                                                                 
        </div>
      </div>
      <span onmouseover="scrollDireita(<?php echo $genero['id']?>)" onmouseout="clearScroll()"  class="handle handleNext active">
        <i class="fa fa-caret-right" aria-hidden="true"></i>
      </span>
    </div>
    <?php
      }
    ?>
<br><br><br><br>

 
<div class="selectforms">
<h4>Altere seus gêneros favoritos!</h4>
<?php 
if (array_key_exists('erro', $_SESSION)){
  echo $_SESSION['erro'];
  unset($_SESSION['erro']);

} ?>
<form action="Home_Ctrl2.php" method="post">
 
  <select name="select1" class="ls-select" style="width:170px" data-search="false">
  <?php
            foreach($up as $select){
            echo "<option value=".$select["id"].">".$select["nome"]."</option>";
      } ?>
  </select>


  <select name="select2" class="ls-select" style="width:170px" data-search="false">
  <?php
            foreach($up as $select){
            echo "<option value=".$select["id"].">".$select["nome"]."</option>";
      } ?>
  </select>


  <select name="select3" class="ls-select" style="width:170px" data-search="false">
  <?php
            foreach($up as $select){
            echo "<option value=".$select["id"].">".$select["nome"]."</option>";
      } ?>
  </select>
  <p class="prosseguir"> <!-- classe referente ao botão de prosseguir no formulário -->
          <input type="submit" name="enviar" value="Prosseguir"> <!-- botão para prosseguir para a próxima fase do cadastro -->
        </p>
</form>
</div>


<script src="select.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>