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
  include 'verif_docen_sesion.php';
  $id = $_SESSION['user_docente'];

  if (isset($_POST['color'])) {
    $color = $_POST['color'];
    echo '<script type="text/javascript">
      var con = new config();
      var parentw = window.parent.document.getElementById("menulat");
      parentw.setAttribute("data-color","'.$color.'");
      con.color_change("'.$color.'");
    </script>';
  }

  if(!($_FILES['imgbg']['size'] == 0)){
    $info = pathinfo($_FILES['imgbg']['name']);
    $ext = $info['extension']; // get the extension of the file
    $newname = $id.".".$ext;

    $target = 'assets/img/'.$newname;
    if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
      echo '<script type="text/javascript">
        window.location.href = "config_docente.php?upload=0";
      </script>';
    }else{
      if (file_exists("assets/img/".$id.".jpg")) {
        unlink("assets/img/".$id.".jpg");
      }
      if (file_exists("assets/img/".$id.".jpeg")) {
        unlink("assets/img/".$id.".jpeg");
      }
      if (file_exists("assets/img/".$id.".png")) {
        unlink("assets/img/".$id.".png");
      }
      if (file_exists("assets/img/".$id.".gif")) {
        unlink("assets/img/".$id.".gif");
      }
      move_uploaded_file( $_FILES['imgbg']['tmp_name'], $target);
    }
  }
?>

<script type="text/javascript">
  window.location.href = "config_docente.php?upload=1";
</script>
