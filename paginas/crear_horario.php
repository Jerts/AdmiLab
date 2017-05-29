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

        <form class="" action="../acciones/crear_horario_a.php" method="post">

          Laboratorio:<br>
          <input list="labs" name="id_laboratorio">
          <datalist id="labs">
            <?php
            include '../conexion.php';
            mysqli_query($conect,"SET NAMES 'utf8'");
            $consulta = "SELECT * FROM laboratorio";
            $consulta = mysqli_query($conect,$consulta);
            while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
              echo "<option value='".$result[0]."'>".$result[2]."</option>";
            }
            ?>
          </datalist><br>

          Materia:<br>
          <input list="materia" name="id_materia">
          <datalist id="materia">
            <?php
            include '../conexion.php';
            mysqli_query($conect,"SET NAMES 'utf8'");
            $consulta = "SELECT `ID_MATERIA` FROM materia";
            $consulta = mysqli_query($conect,$consulta);
            while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
              echo "<option value='".$result[0]."'>".$result[2]."</option>";
            }
            ?>
          </datalist><br>

          Día<br>
          <select  name="dia">
            <option value="LUNES">Lunes</option>
            <option value="MARTES">Martes</option>
            <option value="MIERCOLES">Miercoles</option>
            <option value="JUEVES">Jueves</option>
            <option value="VIERNES">Viernes</option>
          </select><br>

          Hora de entrada (hh:mm:ss)<br>
          <input type="text" name="hora_entrada"><br>

          Hora de salida (hh:mm:ss)<br>
          <input type="text" name="hora_salida"><br>
          <input type="submit" value="Enviar">

        </form>
      </div>
    </div>
  </body>
</html>
