<?php
	include 'verif_docen_sesion.php';
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
    <div style="width:99%; margin: 0 auto;">
      <div class="card">
				<div class="card-content">
				<span class='card-title'>Practica</span>
        <?php
          include '../conexion.php'; //$conect
          mysqli_query($conect,"SET NAMES 'utf8'");
          $consulta = "SELECT DISTINCT(ID_PRACTICA) FROM material_practica
                       INNER JOIN horario ON material_practica.ID_HORARIO = horario.ID_HORARIO WHERE horario.ID_MAESTRO = '".$_SESSION['user_docente']."'";
          $consulta = mysqli_query($conect, $consulta);
          echo "<div class='collection with-header'>";
          while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
            echo "<a class='collection-item' href='verpractica.php?practica=".$result[0]."'>".$result[0]."</a>";
          }
          echo "</div>";
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
