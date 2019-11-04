<html>
<?php
      require "Home_Ctrl.php";
?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- tornar o site responsivo -->
 
  <meta charset="utf-8">
  <!-- hiperlinks para estilização -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- arquivo bootstrap padrão -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- arquivo bootstrap padrão -->
  <link rel="stylesheet" href="css/style.css"> <!-- estilização dos sliders -->
  <link rel="stylesheet" href="selectstyle.css"> <!-- estilização - selects no fim da página -->
  <script src="js/index.js"></script> <!-- JavaScript dos sliders -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css"> <!-- estilização do menu superior -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css"> <!-- estilização responsiva -->
  
  
  <title>
    Home
  </title>
</head>

<body>

<!-- menu superior -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Catálogo de Livros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <!-- código php | oculta o item se não tiver o atributo moderador como = 1 -->
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
        <!-- fim do if php -->
          <li class="nav-item">
            <a class="nav-link" href="../Pesquisa_de_livros/Pesquisa_View.php">Pesquisar
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


  

  <!-- código php - lista de livros salvos do usuários | a lista aparece apenas quando seu número de livros > 0-->
  <?php if (isset($lista) && count($lista)>0){ $list=0; ?>
  
  <div class="contain">
    <div class="slider">
      <h3>Minha Lista</h3>
      <!-- função javascript para rolar os livros horizontalmente/Esquerda --> 
      <span onmouseover="scrollEsquerda(<?php echo $list ?>)" onmouseout="clearScroll()" class="handle handlePrev active">
        <i class="fa fa-caret-left" aria-hidden="true"></i>
      </span>

      <!-- código para embaralhar a ordem de livros --> 
      <div id="<?php echo 'scroller-'.$list?>" class="row">
        <div class="row__inner">
          <?php
            shuffle($lista);
            foreach($lista as $livro){

          ?>

          <!-- sliders de livros da lista -->    
          <div class="gui-card" onclick="window.location.href='../Pagina_Livro/Livro_View.php?id=<?php echo $livro['id']?>'"> <!-- direciona para a página do livro ao clicar nele --> 
            <div class="gui-card__media">
                  <img class="gui-card__img" src="../<?php echo $livro['imagem']?>" alt=""  /> <!-- puxa a imagem do livro no banco de dados --> 
            </div>
              <div class="gui-card__details">
                <div class="gui-card__title">
                    <?php echo $livro['titulo']?> <!-- puxa o título do livro no banco de dados --> 
                </div>
              </div>
            </div>
              <?php    
            }
          
          ?>     

      <!-- função javascript para rolar os livros horizontalmente/Direita -->                                                              
        </div>
      </div>
      <span onmouseover="scrollDireita(<?php echo $list ?>)" onmouseout="clearScroll(<?php echo $list ?>)"  class="handle handleNext active">
        <i class="fa fa-caret-right" aria-hidden="true"></i>
      </span>
    </div>
          <?php } ?>
              






  <!-- sliders de livros por gênero --> 
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

 <!-- select para alterar os gêneros favoritos do usuário --> 
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
  <br>
  <p class="prosseguir">
          <input type="submit" name="enviar" value="Confirmar"> 
        </p>
</form>
</div>


<script src="select.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>