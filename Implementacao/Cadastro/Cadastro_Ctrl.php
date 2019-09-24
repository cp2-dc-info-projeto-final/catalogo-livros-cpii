<?php
 require "Cadastro.php";

 Class CadastroCtrl{

    public function doPost(){
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $senha=$_POST["senha"];
        $confirmasenha=$_POST["confirmasenha"];

        $this->cadastrarCliente($nome, $email, $senha, $confirmasenha);
    }

    public function cadastrarUsuario($nome, $email, $senha, $confirmasenha){
        session_start();

        if(empty($nome))
        $erro[]="O campo nome é obrigatório";

        if(empty($email))
        $erro[]="O campo email é obrigatório";

        if(empty($senha))
        $erro="O campo senha é obrigatório";

        if($senha!=$confirmasenha)
        $erro[]="As senhas não são iguais";

        if(!empty($erro)){
        $SESSION["erro"]=$erro;
        header("Location: CadastroView.php");
        exit();
        }
        $model=new Cadastro();

    if ($model->cadastrarCliente($nome, $email, $senha)) {
        header("Location: ../Login/Login_View.php");
    } else{
        $erro[] = "E-mail indisponível";
        $_SESSION["erro"]=$erro;
        header("Location: CadastroView.php");
    }   
    }
 }

 $controller=new CadastroCtrl();
 if(!empty($_POST)){
     $controller->doPost();
 } else {
     header ('Location: CadastroView.php');
 }