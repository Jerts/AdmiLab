<?php
$user_tecnico = $_POST['user_tecnico'];
$pass_tecnico = sha1($_POST['pass_tecnico']);

include '../conexion.php'; //la variable se llama $conect
if (isset($user_tecnico) && isset($pass_tecnico)) {
  $consulta = "SELECT * FROM `tecnico` WHERE `ID_TECNICO`='{$user_tecnico}' AND `CONTRA`= '{$pass_tecnico}' ";
  $res = mysqli_query($conect,$consulta)or die("Error consulta");

  if(mysqli_num_rows($res)>0){
      session_start();
      $_SESSION['user_tecnico'] = $user_tecnico;
      header("Location: ../paginas/Tecnico");
      echo "Inicio de sesión exitoso";
  }else{
      echo "Error en el inicio de sesión <br>";
  }
}
 ?>
