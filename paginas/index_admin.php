<?php
	include 'verif_admin_sesion.php';
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
