<?php
session_start();
if(!isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
	header("Location: logdocente.php"); /*Regresa al usuario logueado al menu*/
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="assets/css/styles.css"  media="screen"/>
  </head>
  <body style="padding-bottom:200px">
    <div class="card" style="width:90%;margin: 0 auto;">
      <?php
			if(isset($_GET['upload']))
        if($_GET['upload']){
          echo '<div class="green accent-3 card" onclick="this.remove();">
            <div class="card-content">
              Se ha guardado su configuracion. Es posible que sea necesario refrescar la pagina para ver los cambios.
            </div>
          </div>';
        }else if(!$_GET['upload']){
					echo '<div class="red accent-3 card" onclick="this.remove();">
            <div class="card-content">
              No se guardo su configuracion. Por favor intentelo mas tarde.
            </div>
          </div>';
				}
      ?>
      <div class="card-content">
        <form action="uploadcuenta.php" class="formcuenta" method="post" enctype="multipart/form-data">
          <span class="card-title">Configuracion de la cuenta</span>
          <div class="divider"></div>
          <div class="section">
            <font size="5">Imagen de perfil</font><br>
            <a href="#!" onclick="$('#in_menubg').click();"><img class="actualimg" style="max-width:200px; max-height:200px !important; "></a>
            <br><input type="file" style="display:none" id="in_menubg" name="imgperfil">
          </div>
          <div class="divider"></div>
          <div class="section">
          </div>
          <a onclick="$('.formcuenta').submit();" class="btn waves-effect waves-ligth blue" >Guardar</a>
        </form>
      </div>
    </div>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script src="assets/js/config.class.js"></script>
    <script type="text/javascript">
      var parentele = window.parent.document.getElementById('img-perfil');
      var image = parentele.style.background.split("\"")[1];
      $(".actualimg").attr("src",image);
      $(document).ready(function() {
  			$('select').material_select();
  		});
    </script>
  </body>
</html>
