<?php
$user_admin = $_POST['user_admin'];
$pass_admin = sha1($_POST['pass_admin']);

include '../conexion.php'; //la variable se llama $conect
if (isset($user_admin) && isset($pass_admin)) {
  $consulta = "SELECT * FROM `administrador` WHERE `USUARIO`='{$user_admin}' AND `CONTRA`= '{$pass_admin}' ";
  echo $consulta;
  $res = mysqli_query($conect,$consulta)or die("Error consulta");
  
  if(mysqli_num_rows($res)>0){
      session_start();
      $_SESSION['user_admin'] = $user_admin;
      header("Location: ../paginas/index_admin.php");
      echo "Inicio de sesión exitoso";
  }else{
      echo "Error en el inicio de sesión <br>";
  }
}
 ?>
