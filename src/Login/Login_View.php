<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
    
    <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <title>Login</title> <!-- nome na aba da página -->

      <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- tornar o site responsivo -->
			<!-- hiperlinks do bootstrap da página login -->
				<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
				<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
				<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
			<!-- css do menu superior --> -->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
  
  
  
    </head>
  
    <body> <!-- tag pra início do corpo do site -->

    
     
<!-- php | validação do formulário de login -->
      <form action="Login_Ctrl.php" method="post">

      <br>
      <?php
      session_start();
      if (array_key_exists('erro', $_SESSION) == true){
        $erro = $_SESSION["erro"];
				echo "$erro";
				session_unset();
        }
    ?>


     
<!-- formulário de login | email/senha -->

        <div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="email" name="email" placeholder="Insira seu e-mail" required="required">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Digite sua senha" required="required">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<br>
					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						
						<!-- hiperlink para a página de cadastro -->
						<a href="../Cadastro/Cadastro_View.php" class="txt2">
							Cadastre-se
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>     

  

         
          

    </form> <!-- fechamento da tag form -->

   







<!-- JavaScript da página -->
	<script src="js/main.js"></script>




  </body><!-- fechamento da tag body -->
</html>