<?php
	include 'verif_docen_sesion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body style="padding-bottom:200px">
    <div style="width:99%;margin: 0 auto;">
      <div class="card">
				<div class="card-content">
					<span class="card-title">
						Horarios
					</span>
					<p>
        <?php
        include '../conexion.php'; //$conect
        mysqli_query($conect,"SET NAMES 'utf8'");
        $consulta = "SELECT laboratorio.NOMBRE, horario.ID_MATERIA, horario.DIA, horario.HORA_ENTRADA, horario.HORA_SALIDA
        FROM horario
        INNER JOIN laboratorio ON horario.ID_LABORATORIO = laboratorio.ID_LABORATORIO WHERE horario.ID_MAESTRO = '{$_SESSION['user_docente']}'";
        $consulta = mysqli_query($conect, $consulta);
        echo "<table border='1px' class='striped'>
								<thead>
	                <tr>
	                  <td>Laboratorio</td>
	                  <td>Materia</td>
	                  <td>Día</td>
	                  <td>Hora de entrada</td>
	                  <td>Hora de salida</td>
	                </tr>
								</thead>
								<tbody>";
        while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
          echo "<tr>
                  <td>".$result[0]."</td>
                  <td>".$result[1]."</td>
                  <td>".$result[2]."</td>
                  <td>".$result[3]."</td>
                  <td>".$result[4]."</td>
                </tr>";
        }
        echo "</tbody>
				</table>";
         ?>
			 </p>
      </div>
			<div class="card-action">
				<a href="crear_horario.php">Añadir un nuevo horario</a>
			</div>
		</div>
    </div>
		<?php include "script_materialize.html"; ?>
  </body>
</html>
