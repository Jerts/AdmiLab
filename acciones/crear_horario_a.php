<?php
  session_start();
  include '../conexion.php';
  mysqli_query($conect,"SET NAMES 'utf8'");
  $id_maestro = $_SESSION['user_docente'];
  $id_laboratorio = $_POST['id_laboratorio'];
  $id_materia = $_POST['id_materia'];
  $dia = $_POST['dia'];
  $hora_entrada = $_POST['hora_entrada'];
  $hora_salida = $_POST['hora_salida'];
  $consulta="INSERT INTO `horario`(`ID_MAESTRO`,`ID_LABORATORIO`,`ID_MATERIA`,`DIA`,`HORA_ENTRADA`,`HORA_SALIDA`)
             VALUES('{$id_maestro}','{$id_laboratorio}','{$id_materia}','{$dia}','{$hora_entrada}','{$hora_salida}')";
  echo $consulta;
  if (mysqli_query($conect,$consulta)) {
    header("Location: ../paginas/horario_docente.php");
  }
  else {
    echo "No se realizó la inserción";
  }
 ?>
