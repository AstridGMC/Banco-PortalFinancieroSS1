<?php 
session_start();
if(!isset($_SESSION['username'])){
    // echo $_SESSION['username'].'hah';
    header('location: ' . '../vistas/login.php');
    // unset($_SESSION["username"]);
    
}else{
    // unset($_SESSION["username"]);
}


?>