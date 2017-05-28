<?php
/*
FECHA DE CREACIÓN:
ORGANIZACIÓN:
NOMBRE DEL/LOS CREADORES:
LENGUAJES UTILIZADOS:
NUMERO DE CÓDIGO / DE UN TOTAL: ---/---
SECCIÓN A LA QUE PERTENECE EL CÓDIGO
DESCRIPCIÓN
*/

  $conect = new mysqli("localhost","root","","admilab");

  if($conect->connect_error){
    echo "No se pudo conectar al servidor.".PHP_EOL;
    echo "errno de depuracion". $conect->connect_errno. PHP_EOL;
  }

 ?>
