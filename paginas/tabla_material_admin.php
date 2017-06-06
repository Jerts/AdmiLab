<?php
	include 'verif_admin_sesion.php';
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
          $consulta = "SELECT ID_MATERIAL, DESCRIPCION, MARCA, PROVEDOR, CANTIDAD, UNIDAD, FECHA_ENTREGA FROM material";
          $consulta = mysqli_query($conect, $consulta);
          echo "<table class='striped' border='1px'>
                  <thead>
                    <tr>
                      <td>Descripción</td>
                      <td>Marca</td>
                      <td>Provedor</td>
                      <td>Cantidad</td>
                      <td>Unidad</td>
                      <td>Fecha de entrega</td>
                      <td>Modificar</td>
                    </tr>
                  </thead>";
          while ($result = mysqli_fetch_array($consulta, MYSQLI_BOTH)) {
            echo "<tr>
                    <td>".$result[1]."</td>
                    <td>".$result[2]."</td>
                    <td>".$result[3]."</td>
                    <td>".$result[4]."</td>
                    <td>".$result[5]."</td>
                    <td>".$result[6]."</td>
                    <td><a href='modificar_material_admin.php?id=".$result[0]."'><i class='material-icons'>settings_ethernet</i></a></td>
                  </tr>";
          }
          echo "</table>";
        ?>
      </div>
			<div class="card-action">
			 <a href="agregar_material_admin.php">Añadir material</a>
			</div>
		</div>
    </div>
		<?php include "script_materialize.html"; ?>
  </body>
</html>
<a href='modificar_material_admin.php?id=".$result[0]."'></a>
