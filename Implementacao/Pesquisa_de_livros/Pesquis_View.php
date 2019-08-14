<html>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
   <head>
   <script language = "javascript" type=text/javascript">
       function getInformacaoQualquer(){
         createRequest();
         var url = "getInformacaoQualquerDoServidor-ajax.php";
         request.open("GET", url, true);
         request.onreadystatechange = atualizaPagina;
         request.send(null);
       }
      </script>

   <title>Pesquisa de livros</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="pesquis_style.css"> <!-- hyperlink para a conexão com o CSS-->

  </head>

  <body> <!-- tag pra início do corpo do site -->
     
   <form action="Pesquis_Ctrl.php" method="post"> <!-- estrutura form que agrupa todo o forumulário -->
    
     <h1>Pesquisa de livros</h1>

     <br>
     
     <p class="palavra_pesquis">
         <input type="text" placeholder="Livro para ser pesquisado:" name="palavra_pesquis">
     </p>



  </body><!-- fechamento da tag body --> 
</html>