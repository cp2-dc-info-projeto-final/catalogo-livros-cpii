<html>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
  <head>
    
    <title>Adição de Livros</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="adicaostyle.css"> <!-- hyperlink para a conexão com o CSS-->

  </head>
  
    <body> <!-- tag pra início do corpo do site -->

    <form action="AdLivro_Ctrl.php" method="POST"> <!-- estrutura form que agrupa todo o forumulário -->

      <h1>Adição de Livros</h1> <!-- título no topo do formulário -->
      <?php
        session_start();
        if(array_key_exists('msg', $_SESSION) == true){
            $msg = $_SESSION["msg"];
            echo "<br><b>$msg</b>";
            session_unset();
        }
    ?>
      

      
      <br>

      <p class="titulo"> <!-- classe referente ao campo do título do livro no formulário -->
        <input type="text" placeholder="Título do livro:" name="titulo" required="required"> <!-- caixa para inserção do título do livro -->
      </p>

      <p class="autor"> <!-- classe referente ao nome do autor do livro no formulário -->
        <input type="text" placeholder="Autor do livro:" name="autor" required="required"> <!-- espaço para inserção do nome do autor do livro -->
      </p>
    

      <p class="editora"> <!-- classe referente ao campo da editora do livro no formulário -->
        <input type="text" placeholder="Editora:" name="editora" required="required"> <!-- caixa para receber o e-mail do usuário a ser cadastrado -->
      </p>
     

      <p class="sinopse"> <!-- classe referente à sinopse no formulário -->
        <textarea placeholder="Sinopse:" name="sinopse" style="resize: none" required="required"></textarea> <!-- campo para colocar a senha do usuário -->
      </p>

      <p class="imagem">
        <input type="file" placeholder="Endereço da imagem" name="imagem" required="required" accept="image/*"></textarea>
    </p>

        <br><br>
        <p class="enviar"> <!-- classe referente ao botão de enviar no formulário -->
          <input type="submit" name="enviar" value="Enviar"> <!-- botão para enviar o livro ao banco de dados -->
        </p>
        
    </form> <!-- fechamento da tag form -->



  </body><!-- fechamento da tag body -->
</html>
