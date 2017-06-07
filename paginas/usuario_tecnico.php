<?php
	include 'verif_tecn_sesion.php';
  $docente = $_SESSION['user_tecnico'];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body style="padding-bottom:200px; background: url(assets/img/bg1.jpg); background-attachment: fixed !important; background-size: 100% auto; background-repeat: no-repeat;" >
    <div style="width:90%; margin: 300px auto;">
      <div class="card">
				<div class="card-content">
					<span class="card-title">Perfil</span>
					Musha info :v <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      	</div>
			</div>
    </div>
		<span class="span-perfil" style="position:absolute; top:230px;">
			<span style="background: url('assets/img/faces/face-0.jpg'); width:130px !important; height: 130px !important; background-size: auto 130px; background-position: center;display:inline-block" class="circle white" id="img-perfil"></span>
		</span>
		<?php include "script_materialize.html"; ?>
    <script type="text/javascript" src="assets/js/parallax.js"></script>
		<script type="text/javascript">
      <?php
        if (file_exists("assets/img/faces/".$docente.".jpg")) {
          echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$docente.'.jpg");';
        }else if (file_exists("assets/img/faces/".$docente.".jpeg")) {
          echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$docente.'.jpeg");';
        }else if (file_exists("assets/img/faces/".$docente.".png")) {
          echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$docente.'.png");';
        }else if (file_exists("assets/img/faces/".$docente.".gif")) {
          echo '$("#img-perfil").css("background", "url(assets/img/faces/'.$docente.'.gif");';
        }
      ?>
      $("#img-perfil").css("background-size", "auto 130px");
      $("#img-perfil").css("background-position", "center");
      $("#img-perfil").css("background-repeat", "no-repeat");

      $(document).ready(function(){
        var bodywidth = $("body").width();
        $(".span-perfil").css("left", (bodywidth/2)-65 );
      });

			$(window).resize(function(){
				var bodywidth = $("body").width();
        $(".span-perfil").css("left", (bodywidth/2)-65 );
			});

		</script>
  </body>
</html>
