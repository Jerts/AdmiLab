<?php
  session_start();
  if(!isset($_SESSION['user_docente'])){      /*Permite revisar si el usuario ya estaba logeado*/
  	header("Location: LoginDocente"); /*Regresa al usuario logueado al menu*/
  }
?>
