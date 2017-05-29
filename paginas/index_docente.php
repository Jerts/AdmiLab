<?php
session_start();
if(!isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: logdocente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <div style="width:70%; margin: 0 auto;">

      <div style="display:inline-block">
        <ul>
          <li><a href="index_docente.php">Inicio</a></li>
          <li><a href="horario_docente.php">Mi horario</a></li>
          <li><a href="practicas_docente.php">Practicas</a></li>
        </ul>
      </div>

      <div>
        Pagina principal para Docentes<br>
        <?php
          echo $_SESSION['user_docente'];
        ?>
         <a href="cerrarsesion.php">Cerrar sesion</a>
      </div>

    </div>

  </body>
</html>
