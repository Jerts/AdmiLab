<?php
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	include 'verif_admin_sesion.php';
	$admin = $_SESSION['user_admin'];

	include '../conexion.php'; //$conect
	mysqli_query($conect,"SET NAMES 'utf8'");
	$nombre = $_SESSION['user_admin'];
	mysqli_close($conect);
?>

<!doctype html>
<html lang="es">
	<head>
		<title>Panel | AdmiLab</title>
		<style media="screen">
		::-webkit-scrollbar {
		  display: none;
		}
		</style>
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/animate.min.css" rel="stylesheet" />
		<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	</head>

	<body>
		<div class="wrapper">

			<!-- MENU DOCENTE -->
			<?php include ("menu_admin.php"); ?>

			<div class="main-panel">
				<nav class="navbar navbar-default navbar-fixed">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand material-icons large top_icon">insert_chart</a>
							<a class="navbar-brand" href="#"> Panel</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a style="margin-bottom:0px;margin-top:0px" href="#" class="dropdown-toggle notif-drop hidden-xs" data-toggle="dropdown">
										<span style="background: url('assets/img/faces/face-0.jpg'); width:35px !important; height: 35px !important; background-size: auto 35px; background-position: center;display:inline-block" class="img-circle" id="img-perfil"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="vertical-align:50%;"><?php echo $nombre[0]; ?></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#" onclick="menuselect(5)" style="width: 200px !important;">Configuracion de la cuenta</a></li>
										<li><a href="cerrarsesion.php" style="width: 200px !important;">Cerrar sesion</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#" style="margin-bottom:0px;" class="dropdown-toggle notif-drop hidden-xs" data-toggle="dropdown">
										<i class="pe-7s-bell" style="font-size: 20px;"></i>
									</a>
									<ul class="dropdown-menu" style="width:300px !important; padding:0px; height: 300px !important;">
										<li><iframe src="notif.php" class="frame-notif" width="298px" height="298px" frameborder="0" style="margin: auto !important; border-radius: 10px;"></iframe></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- CONTENIDO -->
				<div class="content" style="padding:0px">
					<div class="container-fluid" >
						<div class="row">
							<iframe class="framei" width="100%" frameborder="0" style="margin:0px;"></iframe>
						</div>
					</div>
				</div>

				<!-- FOOTER -->
				<?php include 'footer.php'; ?>

			</div>
		</div>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="assets/js/docente.js"></script>
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
		<script src="assets/js/chartist.min.js"></script>
		<script src="assets/js/bootstrap-notify.js"></script>
		<script src="assets/js/config.class.js"></script>
		<script src="assets/js/light-bootstrap-dashboard.js"></script>
		<script type="text/javascript">
			<?php
				if (file_exists("assets/img/".$admin.".jpg")) {
					echo '$("#menulat").attr("data-image", "'."assets/img/".$admin.".jpg".'");';
				}else if (file_exists("assets/img/".$admin.".jpeg")) {
					echo '$("#menulat").attr("data-image", "'."assets/img/".$admin.".jpeg".'");';
				}else if (file_exists("assets/img/".$admin.".png")) {
					echo '$("#menulat").attr("data-image", "'."assets/img/".$admin.".png".'");';
				}else if (file_exists("assets/img/".$admin.".gif")) {
					echo '$("#menulat").attr("data-image", "'."assets/img/".$admin.".gif".'");';
				}
			?>

			<?php
				if (file_exists("assets/img/faces/".$admin.".jpg")) {
					echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$admin.'.jpg");';
				}else if (file_exists("assets/img/faces/".$admin.".jpeg")) {
					echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$admin.'.jpeg");';
				}else if (file_exists("assets/img/faces/".$admin.".png")) {
					echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$admin.'.png");';
				}else if (file_exists("assets/img/faces/".$admin.".gif")) {
					echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$admin.'.gif");';
				}
			?>
			$("#img-perfil").css("background-size", "auto 35px");
			$("#img-perfil").css("background-position", "center");
			$("#img-perfil").css("background-repeat", "no-repeat");

			$(window).load(function(){
				$(".collapse.navbar-collapse.has-image").css("background-repeat","no-repeat");
				$(".collapse.navbar-collapse.has-image").css("background-size","auto 100%");
				$(".collapse.navbar-collapse.has-image").css("background-position","center");
			});

			$(document).ready(function(){
				var conf = new config();
				var bgcolor = conf.getCookie("sb_color");
				if(!bgcolor){
					document.cookie = 'sb_color=blue';
				}else{
					$("#menulat").attr("data-color", bgcolor);
				}
				$(".framei").height($(window).height()-130);
			});

			$(window).resize(function(){
				$(".framei").height($(window).height()-130);
			});

			function changecolor(color){
				$("#menulat").attr("data-color", color);
			}

		</script>
	</body>
</html>
