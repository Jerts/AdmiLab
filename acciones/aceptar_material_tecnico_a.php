<?php
session_start();
include '../conexion.php';
mysqli_query($conect,"SET NAMES 'utf8'");
$estado = $_POST['estado'];
$id_material = $_POST['id_material'];
$fecha_actual = getdate();
$año = $fecha_actual['year'];
$mes = $fecha_actual['mon'];
$dia = $fecha_actual['mday'];
$fecha_actual = "".$año."-".$mes."-".$dia."";
$tam = count($id_material);
$id_practica = $_SESSION['id_practica'];
$tecnico = $_SESSION['user_tecnico'];
echo $tam;
for ($i=0; $i <$tam ; $i++) {
  if ($estado[$i]=='APROBADO') {
    echo "APROBADO<br>";
    $num1 = "SELECT `CANTIDAD` FROM `material` WHERE `ID_MATERIAL` = '".$id_material[$i]."'";
    $num2 = "SELECT `CANTIDAD_USADA` FROM `material_practica` WHERE `ID_PRACTICA` = '".$id_practica."' AND `ID_MATERIAL` = '".$id_material[$i]."'";
    $num1 = mysqli_query($conect,$num1);
    $num2 = mysqli_query($conect,$num2);
    $num1 = mysqli_fetch_row($num1);
    $num2 = mysqli_fetch_row($num2);
    if ($num1[0]<$num2[0]) {
      die("La cantidad solicitada es mayor a la existente en bodega");
    }
    $material_resultado = $num1[0] - $num2[0];
    echo "".$num1[0]."<br>";
    echo "".$num2[0]."<br>";
    echo "".$material_resultado."<br>";
    $update_material = "UPDATE `material` SET `CANTIDAD` = '".$material_resultado."', `FECHA_ACTUALIZACION` = '".$fecha_actual."' WHERE `ID_MATERIAL` = '".$id_material[$i]."' ";
    echo $update_material;
    mysqli_query($conect,$update_material) or die("Error actualizando la nueva cantidad de material");
    $update_material_practica="UPDATE `material_practica` SET `ID_TECNICO` = '".$tecnico."', `ESTADO` = '".$estado[$i]."' WHERE `ID_PRACTICA` =  '".$id_practica."' AND `ID_MATERIAL` = '".$id_material[$i]."' ";
    echo "<br>".$update_material_practica."";
    mysqli_query($conect,$update_material_practica) or die("Error actualizando material practica");

  }
}
header("Location: ../paginas/tabla_practicas_tecnico.php");
 ?>
