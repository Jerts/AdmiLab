<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/config.class.js"></script>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
  </body>
</html>
<?php
  session_start();
  $id = $_SESSION['user_docente'];

  if(!($_FILES['imgperfil']['size'] == 0)){
    $info = pathinfo($_FILES['imgperfil']['name']);
    $ext = $info['extension'];
    $newname = $id.".".$ext;

    $target = 'assets/img/faces/'.$newname;
    if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
      echo '<script type="text/javascript">
        window.location.href = "confcuenta_docente.php?upload=0";
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
  window.location.href = "confcuenta_docente.php?upload=1";
</script>
