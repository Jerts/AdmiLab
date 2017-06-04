<?php
	include 'verif_docen_sesion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body style="padding-bottom:200px">
    <div style="width:99%; margin: 0 auto;">
      <div class="card">
				<div class="card-content">
					<span class="card-title">Añadir un horario</span>
        <form action="../acciones/crear_horario_a.php" method="post">
          Laboratorio:<br>
          <input list="labs" name="id_laboratorio" class="validate" required>
          <datalist id="labs">
            <?php
            include '../conexion.php';
            mysqli_query($conect,"SET NAMES 'utf8'");
            $consulta = "SELECT * FROM laboratorio";
            $consulta = mysqli_query($conect,$consulta);
            while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
              echo "<option value='".$result[0]."'>Laboratorio: ".$result[0]." ".$result[2]."</option>";
            }
            ?>
          </datalist><br>

          Materia:<br>
          <input list="materia" name="id_materia" class="validate" required>
          <datalist id="materia">
            <?php
            include '../conexion.php';
            mysqli_query($conect,"SET NAMES 'utf8'");
            $consulta = "SELECT * FROM materia";
            $consulta = mysqli_query($conect,$consulta);
            while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
              echo "<option value='".$result[0]."'>".$result[0]."</option>";
            }
            ?>
          </datalist><br>

          Día<br>
					<div class="input-field">
						<select name="dia" class="validate" required>
								<option value="" disabled selected>Seleccione un dia</option>
		            <option value="LUNES">Lunes</option>
		            <option value="MARTES">Martes</option>
		            <option value="MIERCOLES">Miercoles</option>
		            <option value="JUEVES">Jueves</option>
		            <option value="VIERNES">Viernes</option>
		         </select>
					</div>

          Hora de entrada formato 24 horas(hh:mm)<br>
          <input type="text" name="hora_entrada" class="validate" pattern="^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$" required><br>

          Hora de salida formato 24 horas(hh:mm)<br>
          <input type="text" name="hora_salida" class="validate" pattern="^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$" required><br>
					<input type="submit" style="display:none;" class="form1">
          <a type="submit" class="btn waves-effect waves-light" onclick="$('.form1').click();">Enviar</a>

        </form>
      </div>
		</div>
    </div>
		<?php include "script_materialize.html"; ?>
		<script type="text/javascript">
		$(document).ready(function() {
			$('select').material_select();
		});
		</script>
  </body>
</html>
