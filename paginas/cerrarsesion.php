<?php
session_start();
$_SESSION['user_admin'] = array();
$_SESSION['user_docente'] = array();
$_SESSION['user_tecnico'] = array();
session_destroy();
header("Location: ../paginas/");

 ?>
