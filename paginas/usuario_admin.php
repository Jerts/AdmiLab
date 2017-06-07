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
				<ul class="tabs tabs-fixed-width">
					<li class="tab"><a href="#docente">Docente</a></li>
					<li class="tab"><a href="#tecnico">Técnico</a></li>
				</ul>
				<div class="card-content">
					<div id="docente" class="col s12">
						<form action="../acciones/registro_docente_a.php" method="post">
							<div class="input-field col s6">
			          <input id="id" type="text" class="validate" max="50" required>
			          <label for="id">Identificador</label>
			        </div>
							<div class="input-field col s6">
			          <input id="pass" type="password" class="validate" min="6" max="40" required>
			          <label for="pass">Contraseña</label>
			        </div>
							<div class="input-field col s6">
			          <input id="pass2" type="password" class="validate" min="6" max="50" required>
			          <label for="pass2">Confirme la contraseña</label>
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
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Observaciones/Extras (Opcional)</label>
			        </div>
							<input class="submit1" style="display:none" type="submit" name="submit">
							<a href="#!" class="btn waves-effect waves-light" onclick="$('.submit1').click();">Enviar</a>
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
			$('#tabs-swipe-demo').tabs({ 'swipeable': true });
		</script>
  </body>
</html>
