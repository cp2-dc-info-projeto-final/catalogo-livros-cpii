<html>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
    
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title> <!-- nome na aba da página -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  
  <body style="background-color: black;"> <!-- tag pra início do corpo do site -->




    <form action="Cadastro_Ctrl.php" method="post"> <!-- estrutura form que agrupa todo o forumulário -->

    <div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Cadastro
					</span>
      <?php
      session_start();
      if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br>".$erro;
      }
      session_unset();
      ?>
      

      <div class="wrap-input100 validate-input" required="required">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="name" required="required" placeholder="Digite seu nome">
						<span class="focus-input100"></span>
					</div>


          <div class="wrap-input100 validate-input" required="required">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="email" required="required" placeholder="Insira seu e-mail">
						<span class="focus-input100"></span>
					</div>
     

      <div class="wrap-input100 validate-input">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha"  required="required" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" required="required">
						<span class="label-input100">Confirmar Senha</span>
						<input class="input100" type="password" name="confirmasenha" required="required" placeholder="*************">
						<span class="focus-input100"></span>
					</div>


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

          <br><br><br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Cadastrar
							</button>
						</div>

						<a href="../Login/Login_View.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Login
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


        </div>
        

    </form> <!-- fechamento da tag form -->





    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  </body><!-- fechamento da tag body -->
</html>
