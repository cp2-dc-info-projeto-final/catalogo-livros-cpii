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
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
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
        <?php
        require 'Admin_Ctrl.php';
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
      <th>Status</th>
      <th>Ação</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      
      <td>Hide You</td>
      <td>Kosheen</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>.38.45</td>
      <td>Thievery Corporation</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Fix You</td>
      <td>Coldplay</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Maps</td>
      <td>Yeah Yeah Yeahs</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Ask me how I am</td>
      <td>Snow Patrol</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>PMT</td>
      <td>Deeper Water</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Four Kicks</td>
      <td>Kings of Leon</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Gravity</td>
      <td>Embrace</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Lyla</td>
      <td>Oasis</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Look What You've Done</td>
      <td>Jet</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Chicken Payback</td>
      <td>The Bees</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Walkabout</td>
      <td>Blue States</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
     
      <td>Oh My God</td>
      <td>Kaiser Chiefs</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>

    <tr>
      
      <td>Rock Scene</td>
      <td>Athlete</td>
      <td><button type="button" name="" value="" class="css3button">Tornar Administrador</button></td>
    </tr>
  </tbody>
</table>
    
    
  
    
    
    

    </body>



</html>