<html>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
    
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="cadastrostyle.css"> <!-- hyperlink para a conexão com o CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  
    <body> <!-- tag pra início do corpo do site -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Catálogo de Livros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../Login/Login_View.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>





    <form action="Cadastro_Ctrl.php" method="post"> <!-- estrutura form que agrupa todo o forumulário -->

      <h1>Cadastro</h1> <!-- título no topo do formulário -->
      <?php
      session_start();
      if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br>".$erro;
      }
      session_unset();
      ?>
      

      <p class="nome"> <!-- classe referente ao campo do nome no formulário -->
        <input type="text" placeholder="Nome completo:" name="nome" required="required"> <!-- caixa para inserção do nome -->
      </p>


      <p class="email"> <!-- classe referente ao campo do e-mail no formulário -->
        <input type="email" placeholder="E-mail:" name="email" required="required"> <!-- caixa para receber o e-mail do usuário a ser cadastrado -->
      </p>
     

      <p class="senha"> <!-- classe referente à senha no formulário -->
        <input type="password" placeholder="Senha:" name="senha" required="required"> <!-- campo para colocar a senha do usuário -->
        </p>
        
      <p class="confirmasenha">  
        <input type="password" placeholder="Confirmar senha:" name="confirmasenha" required="required"> <!-- campo para a confirmação de senha no cadastro -->
      </p>


          <h5>Escolha 3 Gêneros Favoritos:</h5>

      <div class ="select">

      <?php require "../Adicao_de_livros/Gen_Ctrl.php"; ?>

          <select name="select1" style="font-size:12px" >
            <?php
            foreach($generos as $select){
            echo "<option value=".$select["id"].">".$select["nome"]."</option>";
      } ?>
          </select>

          <select name="select2" style="font-size:12px">
            <?php
            foreach($generos as $select){
              echo "<option value=".$select["id"].">".$select["nome"]."</option>";
            } ?>

          </select>

          <select name="select3" style="font-size:12px">
            <?php  
            foreach($generos as $select){
              echo "<option value=".$select["id"].">".$select["nome"]."</option>";
            }
            ?>
          </select>

        <br><br>
        <p class="prosseguir"> <!-- classe referente ao botão de prosseguir no formulário -->
          <input type="submit" name="enviar" value="Prosseguir"> <!-- botão para prosseguir para a próxima fase do cadastro -->
        </p>
        <a class="login" href="../Login/Login_View.php">Login</a> 



        </div>
        

    </form> <!-- fechamento da tag form -->



  </body><!-- fechamento da tag body -->
</html>
