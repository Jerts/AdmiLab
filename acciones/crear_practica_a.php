<?php
  session_start();
  include '../conexion.php';
  mysqli_query($conect,"SET NAMES 'utf8'");
  $id_practica = $_POST['id_practica'];
  $id_horario= $_POST['id_horario'];
  $id_material = $_POST['id_material'];
  $cantidad_usada = $_POST['cantidad_usada'];
  $unidad= $_POST['unidad'];
  $tam = count($id_material);
  $cont=0;
  echo $tam;
  /*$consulta="INSERT INTO `horario`(`ID_MAESTRO`,`ID_LABORATORIO`,`ID_MATERIA`,`DIA`,`HORA_ENTRADA`,`HORA_SALIDA`)
             VALUES('{$id_maestro}','{$id_laboratorio}','{$id_materia}','{$dia}','{$hora_entrada}','{$hora_salida}')";
  echo $consulta;
  if (mysqli_query($conect,$consulta)) {
    header("Location: ../paginas/horario_docente.php?upload=1");
  }
  else {
    header("Location: ../paginas/crear_horario.php?upload=0");
  }*/
  for ($i=0; $i <$tam ; $i++) {
    $consulta = "INSERT INTO `material_practica`(`ID_PRACTICA`,`ID_MATERIAL`,`ID_HORARIO`,`CANTIDAD_USADA`,`UNIDAD`,`ESTADO`)
                 VALUES('{$id_practica}','".$id_material[$i]."','{$id_horario}','".$cantidad_usada[$i]."','".$unidad[$i]."','PENDIENTE')";
    if (mysqli_query($conect,$consulta)) {
      $cont++;
    }
    else {
      header("Location: ../paginas/crear_practica.php?upload=0");
    }
  }
  if ($cont==$tam) {
    header("Location: ../paginas/practicas_docente.php?upload=1");
  }
 ?>
