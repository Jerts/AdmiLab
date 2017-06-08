<?php
include '../conexion.php'; //$conect
$id_tecnico = $_POST['id_tecnico'];
$contra = sha1($_POST['contra']);
$nombre = $_POST['nombre'];
$p_apellido = $_POST['p_apellido'];
$s_apellido = $_POST['s_apellido'];
$observaciones = $_POST['observaciones'];

if($observaciones === ""){
  $observaciones = "Sin observaciones";
}

$insert = "INSERT INTO `tecnico`(`ID_TECNICO`,`CONTRA`,`NOMBRE(S)`,`P_APELLIDO`,`S_APELLIDO`,`OBSERVACIONES`)
           VALUES ('{$id_tecnico}','{$contra}','{$nombre}','{$p_apellido}','{$s_apellido}','{$observaciones}')";

if (mysqli_query($conect,$insert)) {
  echo "Registro exitoso";
}
else {
  die("Error en la consulta");
}

 ?>
