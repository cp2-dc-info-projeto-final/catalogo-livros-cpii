<?php 
session_start();
if (isset($_SESSION['email']) && $_SESSION['moderador']==1){ 
  require 'Admin_Ctrl.php' ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="AdminStyle.css">
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


            <title>
                Página do Administrador
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
          <li class="nav-item">
            <a class="nav-link" href="../Adicao_de_Livros/AdLivro_View.php">Adicionar Livro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Home/Home_View.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
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





  <div class="grafico">    
<canvas id="myChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script>
        let ctx = document.getElementById("myChart");

        let dados = {
            datasets: [{
                data: [<?php foreach ($Maiores_generos as $genero){ echo $genero['qtd'].','; } ?>],
                backgroundColor: ['red', 'yellow', 'purple', 'white', 'gray', 'green', 'orange',]
            }],

            labels: [<?php foreach ($Maiores_generos as $genero){ echo '\''.$genero['nome'].'\', '; } ?>]      };

        let opcoes = {
            cutoutPercentage: 40
        };


        let meuDonutChart = new Chart(ctx, {
            type: 'doughnut',
            data: dados,
            options: opcoes
        });

    </script>
    
  </div>





    
    <table id="TabelaUsuarios">
  
  <thead>
    <tr>
      
      <th>Nome</th>
      <th>E-mail</th>
      <th>Ação</th>
      <th>Id</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      
    <?php  foreach($usuarios as $usuario) { ?>
      <td><?php echo $usuario['nome'];  ?></td>
      <td><?php echo $usuario['email'];  ?></td>
      <?php if ($usuario['moderador']==1) { ?>
      <td><button type="button" name="" value="" class="css3button" onclick="window.location.href='Admin_Ctrl2.php?id=<?php echo $usuario['id']?>&moderador=1'">Rebaixar</button></td>
      <?php } else { ?>
        <td><button type="button" name="" value="" class="css3button" onclick="window.location.href='Admin_Ctrl2.php?id=<?php echo $usuario['id']?>&moderador=0'">Tornar Administrador</button></td>
      <?php } ?>
      <td><?php echo $usuario['id'];  ?></td>
      </tr>
      <?php }  ?>
    

    
  </tbody>
</table>
    
    
  
    
    
    

    </body>



</html>

      <?php } else {echo '<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você não possui permissão para acessar esta página!!!</p></h1></html>';} ?>