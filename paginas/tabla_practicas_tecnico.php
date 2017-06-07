<?php
	include 'verif_tecn_sesion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
    <div style="width:90%;margin: 26px auto;">
      <div class="card">
				<div class="card-content">
				<span class='card-title'>Materiales</span>
        <?php
          include '../conexion.php'; //$conect
          mysqli_query($conect,"SET NAMES 'utf8'");
          $consulta = "SELECT DISTINCT(material_practica.`ID_PRACTICA`), horario.ID_MAESTRO
                       FROM material_practica
                       INNER JOIN horario ON material_practica.ID_HORARIO = horario.ID_HORARIO WHERE material_practica.ID_TECNICO IS NULL";
          $consulta = mysqli_query($conect, $consulta);
          echo "<table class='striped' border='1px'>
                  <thead>
                    <tr>
                      <td>Practica</td>
                      <td>Solicita</td>
                      <td>Revisar material de práctica</td>
                    </tr>
                  </thead>";
          while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
            echo "<tr>
                    <td>".$result[0]."</td>
                    <td>".$result[1]."</td>
                    <td><a href='aceptar_material_tecnico.php?id=".$result[0]."'><i class='material-icons'>settings_ethernet</i></a></td>
                  </tr>";
          }
          echo "</table>";
        ?>
      </div>
		</div>
    </div>
		<?php include "script_materialize.html"; ?>
  </body>
</html>
