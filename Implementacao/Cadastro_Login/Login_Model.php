<?php
 
 function autentica($email, $senha) {
     $conn = mysqli_connect("localhost", "root", "", "catalogo_de_livros");
     if ($conn===false){
         die("Erro de conexão".mysqli_connect_error());
     }
     $sql= "SELECT senha, nome FROM usuario WHERE email='$email'";

     $result= mysqli_query($conn, $sql);

     if (mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             $hash=$row["senha"];
             if (password_verify($senha, $hash)){
                 return true;
             }else{
                 return false;
             }
         }
     } else{
         return false;
     }
     mysqli_close($conn);
 }