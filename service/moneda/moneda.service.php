<?php 
include "../../routes/url_route.php";
session_start();
// echo $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = http_build_query(
        array(
            'id_tipo_de_cuenta' => $_POST['monedas'],
            'nuevo_valor_quetzales' =>  $_POST['nuevo_valor_quetzales']
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/moneda', false, $context), true);

    if($result['status']==200){
        // echo $result['mensaje_informativo'];
        header('location: ' . '../../vistas/ModificarTaza.php');
    }else{
        $mensajeError = $result['mensaje_informativo'];
        echo $result['mensaje_informativo'];
        // header('location: ' . '../../vistas/ModificarTaza.php');
    }


}else{
    // echo $_PUT['nuevo_valor_quetzales'];
}

?>