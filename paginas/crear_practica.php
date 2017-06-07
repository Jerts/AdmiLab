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
					<span class="card-title">Crear nueva práctica de laboratorio</span>
	        <form action="../acciones/crear_practica_a.php" method="post">
						<h5>Práctica</h5>
            Nombre de la práctica:<br>
            <input type="text" name="id_practica" class="validate" required><br>

            Laboratorio/Materia<br>
            <select name="id_horario" class="validate" required>
              <?php
             session_start();
             $docente=$_SESSION['user_docente'];
             include '../conexion.php';
             mysqli_query($conect,"SET NAMES 'utf8'");
             $consulta = "SELECT horario.ID_HORARIO, laboratorio.NOMBRE, materia.NOMBRE
                           FROM horario
                           INNER JOIN laboratorio ON horario.ID_LABORATORIO = laboratorio.ID_LABORATORIO
                           INNER JOIN materia ON horario.ID_MATERIA = materia.ID_MATERIA
                           WHERE ID_MAESTRO = '".$docente."'";
             $consulta = mysqli_query($conect,$consulta);
             while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
               echo "<option value='".$result[0]."'>Laboratorio: ".$result[1]." | Materia: ".$result[2]."</option>";
             }
             ?>
           </select><br>
					 <div class="divider"></div><br>
            <div id="materiales">
								<h5>Material 1</h5>
                Material<br>
                <select id="sel" name="id_material[0]" class="validate" required>
                  <?php
                    $consulta = "SELECT material.ID_MATERIAL, material.DESCRIPCION, material.CANTIDAD, material.UNIDAD FROM material";
                    $consulta = mysqli_query($conect,$consulta);
                    while ($result=mysqli_fetch_array($consulta,MYSQLI_BOTH)) {
                      echo "<option value='".$result[0]."'>".$result[1]." | Disponible: ".$result[2]." ".$result[3]."</option>";
                    }
                  ?>
                </select><br>
                Cantidad a usar:<br>
                <input type="number" name="cantidad_usada[0]" class="validate" min="1" required>
                Unidad de medida:<br>
                <select name="unidad[0]" class="validate" required>
                  <option value="PIEZA">Pieza</option>
                  <option value="CAJA">Caja</option>
                </select><br><br>
            </div>

            <div id="add"></div>

            <div>
							<button type="button" name="button" onclick="add()" class="btn waves-effect waves-light">+</button>
							<button type="button" name="button" class="btn remove-material waves-effect waves-light">-</button><br><br>
            </div>

						<input type="submit" style="display:none;" class="form1">
	         	<a type="submit" class="btn waves-effect waves-light" onclick="$('.form1').click();">Enviar <span class="num-elem">(1)</span></a>
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

		 $(".remove-material").click(function(){
			 $(".material-section")[$(".material-section").length-1].remove();
			 $(".num-elem").text("("+($(".material-section").length+1)+")");
		 });

    a=0;
    function add(){
      a++;
      var select = document.getElementById('sel').innerHTML;
      var div = document.createElement('div');
			var num = $(".material-section").length+2;
			$(".num-elem").text("("+($(".material-section").length+2)+")");
			div.classList.add("material-section");
			div.innerHTML = "<h5>Material "+num+"</h5>Material<br><select  name='id_material["+a+"]' class='validate' required>"+select+"</select><br>Cantidad a usar:<br><input type='number' name='cantidad_usada["+a+"]' class='validate' min='1' required>Unidad de medida:<br><select name='unidad["+a+"]' class='validate' required><option value='PIEZA'>Pieza</option><option value='CAJA'>Caja</option></select><br><br>";
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
