<?php
session_start();
$_SESSION['user_admin'] = array();
$_SESSION['user_docente'] = array();
session_destroy();
header("Location: LoginDocente");

 ?>
