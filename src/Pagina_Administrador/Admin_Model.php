<?php
require "../Adicao_de_livros/AdLivro_Model.php";
require "../conexao.php";
function Generos(){
    $conn=get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $generos=mostra_generos();
 $maiorgenero1=0;
 $maior1=0;
    foreach ($generos as $genero){
        $id=$genero['id'];
        $sql="SELECT COUNT(id_usuario) FROM genero_usuario WHERE id_genero=$id";
        $result=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($result)){
            $qtd=$row['COUNT(id_usuario)'];

        }
        if ($qtd>$maior1){
            $maior1=$qtd;
            $nome1=$genero['nome'];
            $maiorgenero1=$id;
        }
    }
    $maior2=0;
    $maiorgenero2=0;
    foreach ($generos as $genero){
        $id=$genero['id'];
        if($id!=$maiorgenero1){
        $sql="SELECT COUNT(id_usuario) FROM genero_usuario WHERE id_genero=$id";
        $result=mysqli_query($conn, $sql);
        if ($result==false){
            die(mysqli_error($conn));
        }
        while($row=mysqli_fetch_assoc($result)){
            $qtd=$row['COUNT(id_usuario)'];

        }
        if ($qtd>$maior2){
            $maior2=$qtd;
            $nome2=$genero['nome'];
            $maiorgenero2=$id;
        }
        }
    }
    $maior3=0; $maiorgenero3=0; foreach($generos as $genero){$id= $genero['id']; if($id!=$maiorgenero1 &&
        $id!=$maiorgenero2){$sql = "SELECT COUNT(id_usuario) FROM genero_usuario WHERE id_genero=$id";
        $result=mysqli_query($conn, $sql); while($row=mysqli_fetch_assoc($result)){
            $qtd=$row['COUNT(id_usuario)'];}
        if($qtd>$maior3){$maior3=$qtd; $nome3=$genero['nome']; $maiorgenero3=$id;}} }
        
    $maior4=0; $maiorgenero4=0; foreach($generos as $genero){$id= $genero['id']; if($id!=$maiorgenero1 &&
    $id!=$maiorgenero2 && $id!=$maiorgenero3){$sql = "SELECT COUNT(id_usuario) FROM genero_usuario WHERE id_genero=$id";
    $result=mysqli_query($conn, $sql); while($row=mysqli_fetch_assoc($result)){
    $qtd=$row['COUNT(id_usuario)'];}
    if($qtd>$maior4){$maior4=$qtd; $nome4=$genero['nome']; $maiorgenero4=$id;}} }


    $sql="SELECT COUNT(id_usuario) FROM genero_usuario WHERE id_genero!=$maiorgenero1 AND
    id_genero!=$maiorgenero2 AND id_genero!=$maiorgenero3 AND id_genero!=$maiorgenero4";
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $outros=$row['COUNT(id_usuario)'];
    }
    $maiores_generos=[];
    if (isset($nome1)){
    $maiores['qtd']=$maior1;
    $maiores['nome']=$nome1;
    array_push($maiores_generos, $maiores);
    }
    if (isset($nome2)){
    $maiores['qtd']=$maior2;
    $maiores['nome']=$nome2;
    array_push($maiores_generos, $maiores);
    }
    if (isset($nome3)){
    $maiores['qtd']=$maior3;
    $maiores['nome']=$nome3;
    array_push($maiores_generos, $maiores);
    }
    if (isset($nome4)){
    $maiores['qtd']=$maior4;
    $maiores['nome']=$nome4;
    array_push($maiores_generos, $maiores);
    }
    if (isset($outros)){
    $maiores['qtd']=$outros;
    $maiores['nome']='Outros';
    array_push($maiores_generos, $maiores);
    }
    mysqli_close($conn);
    return($maiores_generos);
} 

function Tipo_Usuarios(){
    $conn=get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $usuarios=[];
  if (isset($_SESSION['id'])){
  $dif=$_SESSION['id'];
  $sql="SELECT * FROM usuario WHERE id!=$dif";}
 else{  
     $sql="SELECT * FROM usuario" ;
      }
 $result=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_assoc($result)){
     $usuario['id']=$row['id'];
     $usuario['email']=$row['email'];
     $usuario['nome']=$row['nome'];
     $usuario['moderador']=$row['moderador'];
     array_push($usuarios, $usuario);
 
}
mysqli_close($conn);
 return $usuarios;
}

function muda_usuario($id, $tipo){
    $conn=get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 if ($tipo==1 || $tipo==0){
 if ($tipo==1){
  $sql="UPDATE usuario SET moderador=0 WHERE id=$id";
 } else { $sql= "UPDATE usuario SET moderador=1 WHERE id=$id ";}
 mysqli_query($conn, $sql);
 mysqli_close($conn);
} else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>ERRO!!!</p></h1></html>');}
 
}