<?php
session_start();
if(!isset($_SESSION['user_admin'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: logadmin.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Pagina principal para administradores
    <?php
    echo $_SESSION['user_admin'];

     ?>
     <a href="cerrarsesion.php">Cerrar sesion</a>
  </body>
</html>
