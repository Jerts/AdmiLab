<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/config.class.js"></script>
<!DOCTYPE html>
<html>
  <head>
    <?php include "header_materialize.html"; ?>
  </head>
  <body>
    <div class="preloader-wrapper small active" style="position:absolute; left:50%; top:50%;">
      <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
    <?php include "script_materialize.html"; ?>
  </body>
</html>
<?php
  include 'verif_tecn_sesion.php';
  $id = $_SESSION['user_tecnico'];

  if(!($_FILES['imgperfil']['size'] == 0)){
    $info = pathinfo($_FILES['imgperfil']['name']);
    $ext = $info['extension'];
    $newname = $id.".".$ext;

    $target = 'assets/img/faces/'.$newname;
    if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
      echo '<script type="text/javascript">
        window.location.href = "confcuenta_tecnico.php?upload=0";
      </script>';
    }else{
      if (file_exists("assets/img/faces/".$id.".jpg")) {
        unlink("assets/img/faces/".$id.".jpg");
      }
      if (file_exists("assets/img/faces/".$id.".jpeg")) {
        unlink("assets/img/faces/".$id.".jpeg");
      }
      if (file_exists("assets/img/faces/".$id.".png")) {
        unlink("assets/img/faces/".$id.".png");
      }
      if (file_exists("assets/img/faces/".$id.".gif")) {
        unlink("assets/img/faces/".$id.".gif");
      }
      move_uploaded_file( $_FILES['imgperfil']['tmp_name'], $target);
    }
  }
?>

<script type="text/javascript">
  window.location.href = "confcuenta_tecnico.php?upload=1";
</script>
