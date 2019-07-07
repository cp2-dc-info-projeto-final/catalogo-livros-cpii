<html>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
  <head>
    
    <title>Cadastro</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="cadastrostyle.css"> <!-- hyperlink para a conexão com o CSS-->

  </head>
  
    <body> <!-- tag pra início do corpo do site -->

    <form action="cadastro.php" method="post"> <!-- estrutura form que agrupa todo o forumulário -->

      <h1>Cadastro</h1> <!-- título no topo do formulário -->
      <?php
      session_start();
      if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br><b>$erro</b>";
          session_unset();
      }
      ?>
      <br>

      <p class="nome"> <!-- classe referente ao campo do nome no formulário -->
        <input type="text" placeholder="Nome completo:" name="nome" required="required"> <!-- caixa para inserção do nome -->
      </p>

      <p class="nomedeusuario"> <!-- classe referente ao nome de usuário no formulário -->
        <input type="text" placeholder="Nome de usuário:" name="nomedeusuario" required="required"> <!-- espaço para inserção do nome de usuário no cadastro -->
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

        <br>
        <p class="prosseguir"> <!-- classe referente ao botão de prosseguir no formulário -->
          <input type="submit" name="enviar" value="Prosseguir"> <!-- botão para prosseguir para a próxima fase do cadastro -->
        </p>
        <a href="formulariodelogin.php">Login</a>

        

    </form> <!-- fechamento da tag form -->



  </body><!-- fechamento da tag body -->
</html>
