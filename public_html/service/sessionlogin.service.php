<?php 
session_start();
if(isset($_SESSION['username'])){
    echo $_SESSION['username'].'sad';
    header('location: ' . '../vistas/index.php');
}


?>