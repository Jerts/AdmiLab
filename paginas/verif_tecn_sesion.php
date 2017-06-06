<?php
  session_start();
  if(!isset($_SESSION['user_tecnico'])){      /*Permite revisar si el usuario ya estaba logeado*/
  	header("Location: LoginTecnico"); /*Regresa al usuario logueado al menu*/
  }
?>
