<?php 
session_start();
unset($_SESSION["username"]);
unset($_SESSION['id_tipo_de_usuario']);
unset($_SESSION['token']);
header('location: ' . '../vistas/login.php');

?>