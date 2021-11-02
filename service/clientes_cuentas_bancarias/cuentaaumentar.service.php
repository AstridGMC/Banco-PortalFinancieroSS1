<?php

include "../../routes/url_route.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = http_build_query(
        array(
            'no_cuenta' => $_POST['no_cuenta'],
            'cantidad' => $_POST['cantidad']
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'PUT',
            'header'  => ['Content-Type: application/x-www-form-urlencoded','token:'.$_SESSION['token']],
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta/deposito', false, $context), true);

    if($result['status']==200){
        unset($usuario);
        header('location: ' . '../../vistas/administracionCuentas.php');
    }else{
    }
}

?>