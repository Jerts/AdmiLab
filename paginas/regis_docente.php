<?php
	include 'verif_admin_sesion.php';
  $docente = $_SESSION['user_admin'];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body>
    <div style="width:90%; margin: 26px auto;">
      <div class="card">
				<div class="card-content">
					<span class="card-title">Docente</span>
					<div class="col s12">
						<form action="../acciones/registro_docente_a.php" method="post">
							<div class="input-field col s6">
			          <input id="id" type="text" class="validate" max="50" required>
			          <label for="id"  data-error="Ya existe.">Identificador único</label>
			        </div>
							<div class="input-field col s6">
			          <input id="pass" type="password" class="validate" min="6" max="40" required>
			          <label for="pass" data-error="No coinciden.">Contraseña</label>
			        </div>
							<div class="input-field col s6">
			          <input id="pass2" type="password" class="validate" min="6" max="50" required>
			          <label for="pass2" data-error="No coinciden.">Confirme la contraseña</label>
			        </div>
							<div class="input-field col s6">
			          <input id="name" type="text" class="validate" max="50" required>
			          <label for="name">Nombre</label>
			        </div>
							<div class="input-field col s6">
			          <input id="last" type="text" class="validate" max="50" required>
			          <label for="last">Apellido Paterno</label>
			        </div>
							<div class="input-field col s6">
			          <input id="last2" type="text" class="validate" max="50" required>
			          <label for="last2">Apellido Materno</label>
			        </div>
							<div class="input-field col s12">
			          <textarea id="textarea1" class="materialize-textarea validate"></textarea>
			          <label for="textarea1">Observaciones/Extras (Opcional)</label>
			        </div>
							<input class="submit1" style="display:none" type="submit" name="submit">
							<a href="#!" class="btn waves-effect waves-light" onclick="formsubmit();">Enviar</a>
						</form>
					</div>
					<div id="tecnico" class="col s12">
						<form action="../acciones/registro_tecnico_a.php" method="post">

						</form>
					</div>
				</div>
			</div>
    </div>
		<?php include "script_materialize.html"; ?>
		<script type="text/javascript">
			function formsubmit(){
				var input = document.getElementsByTagName("input");
				for (var i = 0; i < input.length; i++) {
					if(input[i].className==="invalid"){
						Materialize.toast('Por favor llena correctamente los campos.', 3000, 'rounded');
						return;
					}
				}
				$('.submit1').click();
			}

			$("#pass2").keyup(function(){
				if($("#pass").val()===$("#pass2").val()){
					$("#pass").attr("class","valid");
					$("#pass2").attr("class","valid");
				}else{
					$("#pass").attr("class","invalid");
					$("#pass2").attr("class","invalid");
				}
			});

			$("#id").keyup(function(){
				user_exist($("#id").val());
			});
			$("#id").keydown(function(){
				user_exist($("#id").val());
			});

			function user_exist(str) {
		    if (str == "") {
		        return;
		    } else {
	        if (window.XMLHttpRequest) {
	        	// code for IE7+, Firefox, Chrome, Opera, Safari
	          xmlhttp = new XMLHttpRequest();
	        } else {
	          // code for IE6, IE5
	          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	          if (this.readyState == 4 && this.status == 200) {
							if(this.responseText=="1"){
								$("#id").attr("class","invalid");
								validatedId=false;
							}else{
								$("#id").attr("class","valid");
								validatedId=true;
							}
	          }
	        };
	        xmlhttp.open("GET","docente_user_exist.php?id="+str,true);
	        xmlhttp.send();
		    }
			}
		</script>
  </body>
</html>
