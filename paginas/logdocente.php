<?php
session_start();
if(isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: index_docente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Docente</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
		<link rel="stylesheet" href="assets/css/styles_login.css" media="screen">

  </head>
  <body>

		<div class="centrar" align="center">

				<div align="center" id="card">

						<div class="col m6">
								<div class="card white-1">
										<div class="card-content">
												<span class="card-title">Inicio de Sesión</span>

												<form action="Login/login.php" method="post">
														<!--Envia por get los valores "usr" y "pass"-->
														<!--NOTA: Si quieres cambiar el método tienes que borrarlo, guardar y volver a escribir el nuevo método-->

														<div align="center">
																<img src="assets/img/1.1.fw.png" class="logo" heigh="50%" width="50%">
														</div>

														<input type="text" name="user_docente" id="input_usuario" placeholder="Usuario" autocomplete="off" required>

														<input type="password" name="pass_docente" id="input_pass" minlength="6" placeholder="Contraseña" required>

														<input class="waves-effect waves-light btn" type="submit" name="sbmt" value="Ingresar" id="btn_submit"><br><br>

												</form>

										</div>
										<div class="card-action" align="center">
												<a href="logadmin.php">Iniciar como Administrador</a>
												<a href="#">Registrarse</a>
										</div>
								</div>
						</div>
				</div>
		</div>

		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
  </body>
</html>
