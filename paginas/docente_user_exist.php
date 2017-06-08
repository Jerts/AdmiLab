<?php
$q = $_GET['id'];

include "../conexion.php";

$sql="SELECT `ID_MAESTRO` FROM `maestro` WHERE `ID_MAESTRO` = '".$q."'";
$result = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($result, MYSQLI_NUM);

if($row[0]){
  echo "1";
}else{
  echo "0";
}


mysqli_close($conect);
?>
