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
					<span class="card-title">Agregar material</span>
	        <form action="../acciones/agregar_material_admin_a.php" method="post">
            Descripcion del material (Nombre):<br>
            <input type="text" name="descripcion[0]" class="validate" required><br>
            Marca:<br>
            <input type="text" name="marca[0]" class="validate" required><br>
            Provedor:<br>
            <input type="text" name="provedor[0]" class="validate" required><br>
            Cantidad:<br>
            <input type="number" name="cantidad[0]" class="validate" required><br>
            Unidad de medida:<br>
            <select id="sel" name="unidad[0]" class="validate" required>
              <option value="PIEZA">Pieza</option>
              <option value="CAJA">Caja</option>
            </select><br>
            Fecha de entrega:<br>
            <input type="date" name="fecha_entrega[0]" class="validate datepicker" required>
            <div class="divider"></div><br><br>

            <div id="add"></div>

            <div>
              <button type="button" name="button" onclick="add()"class="btn waves-effect waves-light">+</button><br><br>
            </div>

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
		$('.datepicker').pickadate({
			 selectMonths: true,
			 selectYears: 15
		 });

    a=0;
    function add(){
      a++;
      var select = document.getElementById('sel').innerHTML;
      var div = document.createElement('div');
      div.innerHTML = "  Descripcion del material (Nombre):<br><input type='text' name='descripcion["+a+"]' class='validate' required><br>Marca:<br><input type='text' name='marca["+a+"]' class='validate' required><br>Provedor:<br><input type='text' name='provedor["+a+"]' class='validate' required><br>Cantidad:<br><input type='number' name='cantidad["+a+"]' class='validate' required><br>Unidad de medida:<br><select id='sel' name='unidad["+a+"]' class='validate' required>"+select+"</select><br>Fecha de entrega:<br><input type='date' name='fecha_entrega["+a+"]' class='validate datepicker' required><div class='divider'></div><br><br>";
      document.getElementById('add').appendChild(div);
      $('select').material_select();
			$('.datepicker').pickadate({
				 selectMonths: true,
				 selectYears: 15
			 });
    }
		</script>
  </body>
</html>
