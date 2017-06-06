<?php
  session_start();
  include '../conexion.php';
  mysqli_query($conect,"SET NAMES 'utf8'");
  $descripcion = $_POST['descripcion'];
  $marca = $_POST['marca'];
  $provedor = $_POST['provedor'];
  $cantidad = $_POST['cantidad'];
  $unidad = $_POST['unidad'];
  $fecha_entrega = $_POST['fecha_entrega'];
  $admin = $_SESSION['user_admin'];
  $fecha_actual = getdate();
  $año = $fecha_actual['year'];
  $mes = $fecha_actual['mon'];
  $dia = $fecha_actual['mday'];
  $fecha_actual = "".$año."-".$mes."-".$dia."";

  $consulta = "UPDATE `material` SET `USUARIO_ADMIN`='".$admin."',`DESCRIPCION`='".$descripcion."',
                      `MARCA`='".$marca."',`PROVEDOR`='".$provedor."',`CANTIDAD`='".$cantidad."',
                      `UNIDAD`='".$unidad."',`FECHA_ENTREGA`='".$fecha_entrega."',`FECHA_ACTUALIZACION`='".$fecha_actual."'
                      WHERE `ID_MATERIAL` = '".$_SESSION['id_material_modificar']."'";
  if (mysqli_query($conect,$consulta)) {
    header("Location: ../paginas/tabla_material_admin.php?upload=1");
  }
  else {
    header("Location: ../paginas/modificar_material_admin.php?upload=0");
  }
 ?>
