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
			<div class="card">
      <div class="card-content">
        <form action="uploadcuenta.php" class="formcuenta" method="post" enctype="multipart/form-data">
          <span class="card-title">Configuracion de la cuenta</span>
          <div class="divider"></div>
          <div class="section">
            <font size="5">Imagen de perfil</font><br>
            <a href="#!" onclick="$('#in_menuperfil').click();"><img class="actualimg hoverable" style="max-width:200px; max-height:200px !important; "></a>
            <br><input type="file" style="display:none" id="in_menuperfil" name="imgperfil">
          </div>
          <div class="divider"></div>
          <div class="section">
          </div>
          <a onclick="$('.formcuenta').submit();" class="btn waves-effect waves-ligth blue" >Guardar</a>
        </form>
      </div>
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
			$('#in_menuperfil').change(function(){
				readURL(this);
			});
      var parentele = window.parent.document.getElementById('img-perfil');
      var image = parentele.style.background.split("\"")[1];
      $(".actualimg").attr("src",image);
      $(document).ready(function() {
  			$('select').material_select();
  		});
    </script>
  </body>
</html>
