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

      <div>
        <?php
          include '../conexion.php'; //$conect
          mysqli_query($conect,"SET NAMES 'utf8'");
          $consulta = "SELECT DISTINCT(ID_PRACTICA) FROM material_practica
                       INNER JOIN horario ON material_practica.ID_HORARIO = horario.ID_HORARIO WHERE horario.ID_MAESTRO = '".$_SESSION['user_docente']."'";
          $consulta = mysqli_query($conect, $consulta);
          echo "<div class='collection'>
                    <li class='collection-header'>Practica</li>";
          while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
            echo "<a class='collection-item' href='verpractica.php?practica=".$result[0]."'>".$result[0]."</a>";
          }
          echo "</div>";
        ?>
         <br>
         <a href="crear_practica.php">Añadir una nueva practica</a>
      </div>

    </div>

  </body>
</html>
