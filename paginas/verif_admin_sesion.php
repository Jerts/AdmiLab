<?php
  session_start();
  if(!isset($_SESSION['user_admin'])){      /*Permite revisar si el usuario ya estaba logeado*/
    header("Location: LoginAdministrador"); /*Regresa al usuario logueado al menu*/
  }
?>
