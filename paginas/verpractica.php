<?php
	include 'verif_docen_sesion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body>
    <div style="width:90%;margin: 26px auto;">
      <div class="card">
				<div class="card-content">
	        <?php
	          include '../conexion.php'; //$conect
	          mysqli_query($conect,"SET NAMES 'utf8'");
	          $practica = $_GET['practica'];
	          $docente = "SELECT DISTINCT(horario.ID_MAESTRO)
	                      FROM material_practica
	                      INNER JOIN horario ON material_practica.ID_HORARIO = horario.ID_HORARIO WHERE material_practica.ID_PRACTICA = '{$practica}'";

	          $tecnico = "SELECT DISTINCT(tecnico.`NOMBRE(S)`)
	                      FROM material_practica
	                      INNER JOIN tecnico ON material_practica.ID_TECNICO = tecnico.ID_TECNICO WHERE material_practica.ID_PRACTICA = '{$practica}'";

	          $lista = "SELECT material.DESCRIPCION, material_practica.CANTIDAD_USADA, material_practica.UNIDAD, material_practica.ESTADO
	                       FROM material_practica
	                       INNER JOIN material ON material_practica.ID_MATERIAL = material.ID_MATERIAL WHERE material_practica.ID_PRACTICA = '{$practica}'";

	          $docente = mysqli_query($conect,$docente);
	          $docente = mysqli_fetch_array($docente,MYSQLI_BOTH);

	          if($tecnico = mysqli_query($conect,$tecnico)){
								$tecnico = mysqli_fetch_array($tecnico,MYSQLI_BOTH);
						}
						else {
								$tecnico = "No asignado";
						}

	          $lista = mysqli_query($conect,$lista);
						echo "<span class='card-title truncate'>".$practica."</span>Docente: ".$docente[0]."<br>Técnico: ".$tecnico[0]."";
	          echo "<table class='striped responsive-table' border='1px'>
	                  <thead>
		                  <tr>
		                    <td>Material</td>
		                    <td>Cantidad</td>
		                    <td>Unidad</td>
												<td>Estado</td>
		                  </tr>
										</thead>";
	          while ($result = mysqli_fetch_array($lista, MYSQLI_BOTH)) {
	            echo "<tr>
	                    <td>".$result[0]."</td>
	                    <td>".$result[1]."</td>
	                    <td>".$result[2]."</td>
											<td>".$result[3]."</td>
	                  </tr>";
	          }
	          echo "</table>";
	        ?>
				</div>
				<div class="card-action">
					<a href="crear_practica.php">Añadir una nueva practica</a>
				</div>
      </div>
    </div>
		<?php include "script_materialize.html"; ?>
  </body>
</html>
