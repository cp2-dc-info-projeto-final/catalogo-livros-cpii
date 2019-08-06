<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
  <head>
    
    <title>Login</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="loginstyle.css"> <!-- hyperlink para a conexão com o CSS-->

  </head>
  
    <body> <!-- tag pra início do corpo do site -->

      <form action="Login_Ctrl.php" method="post">

      <h1>Login</h1> <!-- título no topo do formulário -->
      <br>
      <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "$erro";
            session_unset();
        }
    ?>

      <p class="email"> <!-- classe referente ao nome de usuário no formulário -->
        <input type="email" placeholder="E-mail:" name="email" required="required"> <!-- espaço para inserção do nome de usuário no cadastro -->
      </p>

      <p class="senha"> <!-- classe referente à senha no formulário -->
        <input type="password" placeholder="Senha:" name="senha" required="required"> <!-- campo para colocar a senha do usuário -->
      </p>

        <br><br>
        <p class="entrar"> <!-- classe referente ao botão de prosseguir no formulário -->
          <input type="submit" name="entrar" value="Entrar"> <!-- botão para prosseguir para a próxima fase do cadastro -->
        </p>
        <a href="formulariodecadastro.php">Cadastre-se</a>

    </form> <!-- fechamento da tag form -->



  </body><!-- fechamento da tag body -->
</html>