<?php
session_start();
if(isset($_SESSION['user_admin'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: index_admin.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      Inicia sesión como administrador<br>
      <form class="" action="../acciones/logadmin_a.php" method="post">
        Usuario:<br>
        <input type="text" name="user_admin" required=""><br>
        Contraseña:<br>
        <input type="password" name="pass_admin" required=""><br>
        <input type="submit"value="Enviar">
      </form>
    </div>
  </body>
</html>
