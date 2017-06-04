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
    <div class="card" style="width:99%;margin: 0 auto;">
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
        <form action="upload.php" class="fileimg" method="post" enctype="multipart/form-data">
          <span class="card-title">Configuracion</span>
          <div class="divider"></div>
          <div class="section">
            <font size="5">Fondo de menu</font><br>
            <a href="#!" onclick="$('#in_menubg').click();"><img class="actualimg hoverable" style="max-width:200px; max-height:200px !important; "></a>
            <br><input type="file" style="display:none" id="in_menubg" name="imgbg">
          </div>
          <div class="divider"></div>
          <div class="section">
            <font size="5">Color del menu</font>
            <div class="input-field col s12 m6">
              <select class="icons" name="color">
                <option value="" disabled selected>Selecciona un color</option>
                <option value="blue" data-icon="assets/img/transp.png" class="circle blue">Azul</option>
                <option value="red" data-icon="assets/img/transp.png" class="circle red">Rojo</option>
                <option value="green" data-icon="assets/img/transp.png" class="circle green">Verde</option>
								<option value="orange" data-icon="assets/img/transp.png" class="circle orange">Naranja</option>
                <option value="purple" data-icon="assets/img/transp.png" class="circle purple">Morado</option>
                <option value="grey" data-icon="assets/img/transp.png" class="circle grey">Gris</option>
              </select>
            </div>
          </div>
          <a onclick="conf.sendConf();" class="btn waves-effect waves-ligth blue" >Guardar</a>
        </form>
      </div>
    </div>
		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script src="assets/js/config.class.js"></script>
    <script type="text/javascript">
			function readURL(input) {
		    if (input.files && input.files[0]) {
			    var reader = new FileReader();

			    reader.onload = function (e) {
			        $('.actualimg').attr('src', e.target.result);
			    }

		        reader.readAsDataURL(input.files[0]);
		    }
			}
			var conf = new config();
			$('#in_menubg').change(function(){
				readURL(this);
			});
      $(document).ready(function() {
  			$('select').material_select();
  		});
    </script>
  </body>
</html>
