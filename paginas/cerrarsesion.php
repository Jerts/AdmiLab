<?php
session_start();
$_SESSION['user_admin'] = array();
session_destroy();
header("Location: index.php");

 ?>
