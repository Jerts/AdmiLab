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
        <?php
        include '../conexion.php'; //$conect
        mysqli_query($conect,"SET NAMES 'utf8'");
        $consulta = "SELECT laboratorio.NOMBRE, horario.ID_MATERIA, horario.DIA, horario.HORA_ENTRADA, horario.HORA_SALIDA
        FROM horario
        INNER JOIN laboratorio ON horario.ID_LABORATORIO = laboratorio.ID_LABORATORIO WHERE horario.ID_MAESTRO = '{$_SESSION['user_docente']}'";
        $consulta = mysqli_query($conect, $consulta);
        echo "<table border='1px'>
                <tr>
                  <td>Laboratorio</td>
                  <td>Materia</td>
                  <td>Día</td>
                  <td>Hora de entrada</td>
                  <td>Hora de salida</td>
                </tr>";
        while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
          echo "<tr>
                  <td>".$result[0]."</td>
                  <td>".$result[1]."</td>
                  <td>".$result[2]."</td>
                  <td>".$result[3]."</td>
                  <td>".$result[4]."</td>
                </tr>";
        }
        echo "</table>";
         ?>
         <br>
         <a href="crear_horario.php">Añadir un nuevo horario</a>
      </div>

    </div>

  </body>
</html>
