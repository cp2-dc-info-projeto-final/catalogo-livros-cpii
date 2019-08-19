<html>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
   <head>
   <script scr="js/jquery.js">
    $('#buscar').click(function () (
      buscar($("$palavra").val())
    });
   </script>
   <title>Pesquisa de livros</title> <!-- nome na aba da página -->
      <link rel="stylesheet" type="text/css" href="pesquis_style.css"> <!-- hyperlink para a conexão com o CSS-->

  </head>

  <body> <!-- tag pra início do corpo do site -->
     
   <form action="Pesquis_Ctrl.php" method="post"> <!-- estrutura form que agrupa todo o forumulário -->
    
     <h1>Pesquisa de livros</h1>

     <br>
     
    

   <input type="checkbox" name="Biografia" value="1" /> Biografia
   <input type="checkbox" name="Clássicos" value="2" /> Clássicos
   <input type="checkbox" name="Suspense" value="3" /> Suspense
   <input type="checkbox" name="Conto" value="4" /> Conto
   <input type="checkbox" name="Drama" value="5" /> Drama
   <input type="checkbox" name="Economia" value="6" /> Economia
   <input type="checkbox" name="Fantasia" value="7" /> Fantasia
   <input type="checkbox" name="Ficção" value="8" /> Ficção
   <input type="checkbox" name="Didático" value="9" /> Didático
   <input type="checkbox" name="Filosofia" value="10" /> Filosofia
   <input type="checkbox" name="Horror" value="11" /> Horror
   <input type="checkbox" name="HQs" value="12" /> HQs
   <input type="checkbox" name="Humor" value="13" /> Humor
   <input type="checkbox" name="Mangá" value="14" /> Mangá
   <input type="checkbox" name="Romance" value="15" /> Romance
   <input type="checkbox" name="Ciências" value="16" /> Ciências
   <input type="checkbox" name="História" value="17" /> História
   <input type="checkbox" name="Matemática" value="18" /> Matemática
   <input type="checkbox" name="Geografia" value="19" /> Geografia
   <input type="checkbox" name="Poesia" value="20" /> Poesia
   <input type="checkbox" name="Sociologia" value="21" /> Sociologia
   <input type="checkbox" name="Línguas" value="22" /> Línguas

   <div class="palavra_pesquis">
         <input type="text" class="form-control" id="palavra"  placeholder="Procurar:">
         <span class="input-group-btn">
               <button type="button" onclick="loadDoc()">Pesquisar</button>
         </span>
   </div>
     </p>
   <div id="dados">PLACEHOLDER DE AREA DE INFORMAÇÕES</div>

  </body><!-- fechamento da tag body --> 
</html>