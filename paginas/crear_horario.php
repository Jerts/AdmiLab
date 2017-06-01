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
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
		<link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  </head>
  <body>
    <div style="width:90%; margin: 0 auto;">
      <div class="card">
				<div class="card-content">
					<span class="card-title">Añadir un horario</span>
        <form class="" action="../acciones/crear_horario_a.php" method="post">
          Laboratorio:<br>
          <input list="labs" name="id_laboratorio" class="validate">
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
          <input list="materia" name="id_materia" class="validate">
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
					<div class="input-field">
						<select name="dia" class="validate">
								<option value="" disabled selected>Seleccione un dia</option>
		            <option value="LUNES">Lunes</option>
		            <option value="MARTES">Martes</option>
		            <option value="MIERCOLES">Miercoles</option>
		            <option value="JUEVES">Jueves</option>
		            <option value="VIERNES">Viernes</option>
		         </select>
					</div>

          Hora de entrada (hh:mm:ss)<br>
          <input type="text" name="hora_entrada" class="validate"><br>

          Hora de salida (hh:mm:ss)<br>
          <input type="text" name="hora_salida" class="validate"><br>
          <input type="submit" class="btn waves-effect waves-light" value="Enviar">

        </form>
      </div>
		</div>
    </div>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('select').material_select();
		});
		</script>
  </body>
</html>
