<?php
$user_docente = $_POST['user_docente'];
$pass_docente = $_POST['pass_docente'];

include '../conexion.php'; //la variable se llama $conect
if (isset($user_docente) && isset($pass_docente)) {
  $consulta = "SELECT * FROM `maestro` WHERE `ID_MAESTRO`='{$user_docente}' AND `CONTRA`= '{$pass_docente}' ";
  $res = mysqli_query($conect,$consulta)or die("Error consulta");

  if(mysqli_num_rows($res)>0){
      session_start();
      $_SESSION['user_docente'] = $user_docente;
      header("Location: ../paginas/index_docente.php");
      echo "Inicio de sesión exitoso";
  }else{
      echo "Error en el inicio de sesión <br>";
  }
}
 ?>
