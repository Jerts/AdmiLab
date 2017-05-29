<?php
session_start();
if(isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: index_docente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
		<link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

  </head>
  <body>
	<style media="screen">
	body {
	background-image: url("assets/img/bg.jpg");
	background-repeat: no-repeat;
	background-size: 100%;
  }
	
.contenido_docente {
	background: rgba(255, 255, 255, 0.7);
	width: 30%;
	min-width: 400px;
	margin: auto;
	margin-top: 25px;
	border-radius: 10px;
	padding-bottom: 10px;
	padding-top: 10px;
				}

form {
  margin-left: 30px;
  margin-right: 30px;
}
		</style>

	<div class="contenido_docente" align="center">

	<form action="Login/login.php" method="post"> <!--Envia por get los valores "usr" y "pass"--> <!--NOTA: Si quieres cambiar el método tienes que borrarlo, guardar y volver a escribir el nuevo método-->

			<div align="center" >
			<img src="assets/img/1.1.fw.png" class="logo" heigh="250px" width="250px" >
			</div>

			<h3>Inicio de Sesión</h3>

			<input type="email" name="user_docente" id="input_usuario" placeholder="Usuario" autocomplete="off" required>
			<input type="password" name="pass_docente" id="input_pass" minlength="6" placeholder="Contraseña" required>

			<input  class="waves-effect waves-light btn" type="submit" name="sbmt" id="btn_submit"><br><br>

		<div align="center">
		<a href="Registro/">Registrarse</a>
		</div>

	</form>
</div>

		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
  </body>
</html>
