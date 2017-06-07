<?php
	include 'verif_tecn_sesion.php';
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
          <form  action="../acciones/aceptar_material_tecnico_a.php" method="post">
            <?php
  	          include '../conexion.php'; //$conect
  	          mysqli_query($conect,"SET NAMES 'utf8'");
  	          $practica = $_GET['id'];
              $_SESSION['id_practica'] = $practica;
  	          $docente = "SELECT DISTINCT(horario.ID_MAESTRO)
  	                      FROM material_practica
  	                      INNER JOIN horario ON material_practica.ID_HORARIO = horario.ID_HORARIO WHERE material_practica.ID_PRACTICA = '{$practica}'";

  	          $tecnico = "SELECT DISTINCT(tecnico.`NOMBRE(S)`)
  	                      FROM material_practica
  	                      INNER JOIN tecnico ON material_practica.ID_TECNICO = tecnico.ID_TECNICO WHERE material_practica.ID_PRACTICA = '{$practica}'";

  	          $lista = "SELECT material.DESCRIPCION, material_practica.CANTIDAD_USADA, material_practica.UNIDAD, material_practica.ESTADO, material_practica.ID_MATERIAL
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
  	          echo "<table class='striped' border='1px'>
  	                  <thead>
  		                  <tr>
  		                    <td>Material</td>
  		                    <td>Cantidad</td>
  		                    <td>Unidad</td>
  												<td>Estado</td>
  		                  </tr>
  										</thead>";
              $i = 0;
              $iaux= $i;
  	          while ($result = mysqli_fetch_array($lista, MYSQLI_BOTH)) {
  	            echo "<tr>
  	                    <td>".$result[0]."</td>
  	                    <td>".$result[1]."</td>
  	                    <td>".$result[2]."</td>
  											<td>".$result[3]."</td>
                        <td><input id='estados".$i."' type='checkbox' name='estado[".$iaux."]' class='validate' value='APROBADO'/>
                            <label for='estados".$i."'>APROBADO</label>
                            <input id='estados".++$i."' type='checkbox' name='estado[".$iaux."]' class='validate' value='RECHAZADO'/>
                            <label for='estados".$i."'>RECHAZADO</label>
                            <input type='hidden' name='id_material[".$iaux."]' value='".$result[4]."'>
                        </td>
  	                  </tr>";
                $i++;
                $iaux++;
  	          }
  	          echo "</table>";
  	        ?>
            <input type="submit" style="display:none;" class="form1">
	          <a type="submit" class="btn waves-effect waves-light" onclick="$('.form1').click();">Enviar</a>
          </form>

				</div>
      </div>
    </div>
		<?php include "script_materialize.html"; ?>
  </body>
</html>
