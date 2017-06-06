<?php
	include 'verif_admin_sesion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body>
    <div style="width:90%;margin: 26px auto;">
      <div class="card">
				<?php
				if(isset($_GET['upload']))
	        if(!$_GET['upload']){
						echo '<div class="red accent-3 card" onclick="this.remove();">
	            <div class="card-content">
	              Algo salió mal, por favor asegurese de llenar los campos correctamente.
	            </div>
	          </div>';
					}
	      ?>
				<div class="card-content">
					<span class="card-title">Modificar material</span>
	        <form action="../acciones/modificar_material_admin_a.php" method="post">
            <?php
            include '../conexion.php'; //$conect
            mysqli_query($conect,"SET NAMES 'utf8'");
            $id_material = $_GET['id'];
            $_SESSION['id_material_modificar'] = $id_material;
            $consulta = "SELECT DESCRIPCION, MARCA, PROVEDOR, CANTIDAD, UNIDAD, FECHA_ENTREGA
                         FROM `material` WHERE ID_MATERIAL = '".$id_material."'";
            $consulta = mysqli_query($conect,$consulta);
            $result = mysqli_fetch_row($consulta);
            echo "
            Descripcion del material (Nombre):<br>
            <input type='text' name='descripcion' class='validate' value='".$result[0]."' required><br>
            Marca:<br>
            <input type='text' name='marca' class='validate' value='".$result[1]."' required><br>
            Provedor:<br>
            <input type='text' name='provedor' class='validate' value='".$result[2]."' required><br>
            Cantidad:<br>
            <input type='number' name='cantidad' class='validate' value='".$result[3]."' required><br>
            Unidad de medida:<br>
            <select id='sel' name='unidad' class='validate' value='".$result[4]."' required>
              <option value='PIEZA'>Pieza</option>
              <option value='CAJA'>Caja</option>
            </select><br>
            Fecha de entrega:<br>
            <input type='date' name='fecha_entrega' class='validate'value='".$result[5]."' required>
            <br><br>
            ";
            ?>
						<input type="submit" style="display:none;" class="form1">
	          <a type="submit" class="btn waves-effect waves-light" onclick="$('.form1').click();">Enviar</a>
	        </form>
      	</div>
			</div>
    </div>
		<?php include "script_materialize.html"; ?>
		<script type="text/javascript">
		$(document).ready(
      function() {
			$('select').material_select();
		  }

    );
		</script>
  </body>
</html>
