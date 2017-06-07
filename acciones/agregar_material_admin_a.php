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
  $tam = count($descripcion);
  $cont=0;
  echo $tam;
  for ($i=0; $i <$tam ; $i++) {
    $consulta = "INSERT INTO `material`(`USUARIO_ADMIN`,`DESCRIPCION`,`MARCA`,`PROVEDOR`,`CANTIDAD`,`UNIDAD`,`FECHA_ENTREGA`,`FECHA_ACTUALIZACION`)
                 VALUES('".$admin."','".$descripcion[$i]."','".$marca[$i]."','".$provedor[$i]."','".$cantidad[$i]."','".$unidad[$i]."','".date("Y-n-j",strtotime($fecha_entrega[$i]))."','".$fecha_actual."')";
    if (mysqli_query($conect,$consulta)) {
      $cont++;
    }
    else {
      header("Location: ../paginas/agregar_material_admin.php?upload=0");
    }
  }
  if ($cont==$tam) {
    header("Location: ../paginas/tabla_material_admin.php?upload=1");
  }
 ?>
