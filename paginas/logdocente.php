<?php
session_start();
if(isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: index_docente.php"); /*Regresa al usuario logueado al menu*/
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
      Inicia sesión como docente<br>
      <form class="" action="../acciones/logdocente_a.php" method="post">
        Usuario:<br>
        <input type="text" name="user_docente" required=""><br>
        Contraseña:<br>
        <input type="password" name="pass_docente" required=""><br>
        <input type="submit"value="Enviar">
      </form>
    </div>
  </body>
</html>
