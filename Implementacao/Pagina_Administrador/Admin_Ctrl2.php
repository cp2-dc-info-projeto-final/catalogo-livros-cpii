<?php
if (isset($_SESSION['email']) && $_SESSION['moderador']==1){
if (isset($_GET['id'])){
    muda_usuario($_GET['id'], $GET['moderador']);
}
} else {echo '<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você não possui permissão para requisitar esta página!!!</p></h1></html>'};