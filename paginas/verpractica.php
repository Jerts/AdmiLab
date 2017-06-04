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

	          $lista = "SELECT material.DESCRIPCION, material_practica.CANTIDAD_USADA, material_practica.UNIDAD
	                       FROM material_practica
	                       INNER JOIN material ON material_practica.ID_MATERIAL = material.ID_MATERIAL WHERE material_practica.ID_PRACTICA = '{$practica}'";

	          $docente = mysqli_query($conect,$docente);
	          $docente = mysqli_fetch_array($docente,MYSQLI_BOTH);

	          $tecnico = mysqli_query($conect,$tecnico);
	          $tecnico = mysqli_fetch_array($tecnico,MYSQLI_BOTH);

	          $lista = mysqli_query($conect,$lista);
						echo "<span class='card-title truncate'>".$practica."</span>".$docente[0].$tecnico[0];
	          echo "<table class='striped' border='1px'>
	                  <thead>
		                  <tr>
		                    <td>Material</td>
		                    <td>Cantidad</td>
		                    <td>Unidad</td>
		                  </tr>
										</thead>";
	          while ($result = mysqli_fetch_array($lista, MYSQLI_BOTH)) {
	            echo "<tr>
	                    <td>".$result[0]."</td>
	                    <td>".$result[1]."</td>
	                    <td>".$result[2]."</td>
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
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  </body>
</html>
