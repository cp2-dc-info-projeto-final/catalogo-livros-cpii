<html>
<?php
          session_start();
          if (isset($_SESSION['email']) && $_SESSION['moderador']==1){
          ?>

    <meta http-equiv="Content-Type" charset="UTF-8" content="text/html"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
    
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    

    <link rel="stylesheet" type="text/css" href="adicaostyle.css">
    
    <title>Adição de Livros</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="adicaostyle.css"> <!-- hyperlink para a conexão com o CSS-->
      <script src="../js/jquery.js"></script>
      <script>
        function adiciona_genero() {
          var genName = $('#select-genero option:selected').text();
          var genId = $('#select-genero option:selected').attr("value");
          var found = false;

          $('.div-genero span').each(function() {
              
              var currentElement = $(this);

              var value = currentElement.attr("value"); // if it is an input/select/textarea field
              if (value == genId) {
                found = true;
              }
              // TODO: do something with the value
          });

          if (!found) {
            $('#generos-selecionados').append("<div class='div-genero'><span>" + genName + "</span><div class=\"btn-adicionar-x\" onclick=\"remove_genero('" + genName + "')\">X</div><input type='hidden' name='" +genName+ "' value='"+genId+"'></div>");
          }
          
        }

        function remove_genero(genName) {

          $('.div-genero span').each(function() {
              
              var currentElement = $(this);

              var value = currentElement.text(); // if it is an input/select/textarea field
              if (value == genName) {
                currentElement.parent().remove();
              }
              // TODO: do something with the value
          });

        }
      </script>
        
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
        <!-- código php | oculta o item se não tiver o atributo moderador como = 1 -->
          
        <li class="nav-item">
            <a class="nav-link" href="../Pagina_Administrador/Admin_View.php">Página do Moderador</a>
          </li>
        <!-- fim do if php -->
          <li class="nav-item">
            <a class="nav-link" href="../Pesquisa_de_livros/Pesquisa_View.php">Pesquisar
              <span class="sr-only">(current)</span>
            </a>
          </li>
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
    

    <form action="AdLivro_Ctrl.php" method="POST" enctype="multipart/form-data"> <!-- estrutura form que agrupa todo o forumulário -->

      <h1>Adição de Livros</h1> <!-- título no topo do formulário -->
      <?php
        
        if(array_key_exists('msg', $_SESSION) == true){
            $msg = $_SESSION["msg"];
            echo "$msg";
            unset($_SESSION["msg"]);
        }
    ?>
      

      
      <br>

      <p class="titulo"> <!-- classe referente ao campo do título do livro no formulário -->
        <input type="text" placeholder="Título do livro:" name="titulo" required="required"> <!-- caixa para inserção do título do livro -->
      </p>
      <br>
      <p class="autor"> <!-- classe referente ao nome do autor do livro no formulário -->
        <input type="text" placeholder="Autor do livro:" name="autor" required="required"> <!-- espaço para inserção do nome do autor do livro -->
      </p>
  <br>

      <p class="editora"> <!-- classe referente ao campo da editora do livro no formulário -->
        <input type="text" placeholder="Editora:" name="editora" required="required"> <!-- caixa para receber o e-mail do usuário a ser cadastrado -->
      </p>
      <br>
      <p class="arquivo">
        <input type="file" placeholder="Imagem:" name="arquivo" required="required" accept="image/*"></textarea>
    </p>
    <br>
    <p class="sinopse"> <!-- classe referente à sinopse no formulário -->
        <textarea placeholder="Sinopse:" name="sinopse" style="resize: none" required="required"></textarea> <!-- campo para colocar a senha do usuário -->
      </p>
      <br>
      <div class="generos" style="with:200px"> 
      <input type="button" id="btn-genero" onclick="adiciona_genero()" value="Adiciona Genero">
      <select id="select-genero" name="generos">
      <?php
        require "Gen_Ctrl.php";
         foreach ($generos as $genero) {
         echo "<option value=".$genero["id"].">".$genero["nome"]."</option>";
         }
      ?>        
      </select>
      <br>
         <div id="generos-selecionados">
      <!--btn add-->
        </div>         
        <br><br><br><br>
        <p class="enviar"> <!-- classe referente ao botão de enviar no formulário -->
          <input type="submit" name="enviar" value="Enviar"> <!-- botão para enviar o livro ao banco de dados -->
        </p>
        
    </form> <!-- fechamento da tag form -->



  </body><!-- fechamento da tag body -->
</html>
<?php } else {echo '<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você não possui permissão para acessar esta página!!!</p></h1></html>';} ?>