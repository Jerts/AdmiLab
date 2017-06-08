<?php
session_start();
if(isset($_SESSION['user_admin'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: Administrador"); /*Regresa al usuario logueado al menu*/
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Administrador</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="assets/css/styles_login.css" media="screen">
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen"/>

  </head>
  <body id="body_admin">

		<div class="main" align="center">

				<div align="center" id="card">

						<div class="col m6">
								<div class="card white-1">
										<div class="card-content">
												<span class="card-title">Inicio de Sesión Administrador</span>

												<form action="../acciones/logadmin_a.php" method="post">

														<div align="center">
																<img src="assets/img/1.1.fw.png" class="logo" heigh="50%" width="50%">
														</div>

														<input type="text" name="user_admin" id="input_usuario" placeholder="Usuario" autocomplete="off" required>

														<input type="password" name="pass_admin" id="input_pass" minlength="6" placeholder="Contraseña" required>

														<input class="waves-effect waves-light btn" type="submit" name="sbmt" value="Ingresar" id="btn_submit"><br><br>

												</form>

										</div>
										<div class="card-action" align="center">
												<a href="LoginDocente">Iniciar como Docente</a> <br>
												<a href="logtecnico.php">Iniciar como Técnico</a>
												<a href="#modal1">Registrarse</a>
										</div>
								</div>
						</div>
				</div>
		</div>
		<div id="modal1" class="modal">
	    <div class="modal-content center">
				<h4>Suscribete para adquirir AdmiLab</h4>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_xclick-subscriptions">
					<input type="hidden" name="business" value="ramiroestradag@hotmail.com">
					<input type="hidden" name="lc" value="MX">
					<input type="hidden" name="item_name" value="AdmiLab">
					<input type="hidden" name="no_note" value="1">
					<input type="hidden" name="a1" value="0.00">
					<input type="hidden" name="p1" value="1">
					<input type="hidden" name="t1" value="M">
					<input type="hidden" name="src" value="1">
					<input type="hidden" name="a3" value="59.99">
					<input type="hidden" name="p3" value="1">
					<input type="hidden" name="t3" value="M">
					<input type="hidden" name="currency_code" value="MXN">
					<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" width="200px" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
					<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
				</form>
	    </div>
	  </div>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/materialize.js"></script>
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('.modal').modal();
		});
		</script>
  </body>
</html>
