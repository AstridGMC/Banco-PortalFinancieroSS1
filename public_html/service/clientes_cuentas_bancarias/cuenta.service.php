<?php 


// echo $_POST['id_banco'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../../routes/url_route.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();

    if($_POST['tipo']==1){
        $saldo = 200;
    }elseif($_POST['tipo']==2){
        $saldo = 50;
    }elseif($_POST['tipo']==3){
        $saldo = 50;
    }

    $data = http_build_query(
        array(
            'id_tipo_de_cuenta' => $_POST['tipo'],
            'username' => $_POST['username1'],
            'id_banco' => $_POST['id_banco'],
            'saldo' => $saldo  
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => ['Content-Type: application/x-www-form-urlencoded','token:'.$_SESSION['token']],
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta', false, $context), true);
    unset($saldo);
    if($result['status']==200){
        $mensaje_informativo = $result['mensaje_informativo'];
        $msj = $result['mensaje_informativo'];
        header('location: ' . '../../vistas/nuevaCuenta.php?mensaje='.$msj);
    }else{

    }


}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 'entro al GET';
    $data = http_build_query(
        array(
            'token' => $_SESSION['token'],
            // 'id_tipo_de_cuenta' => $_SESSION['id_tipo_de_usuario'],
            // 'username' => $_SESSION['username'],
            // 'no_cuenta' => $_SESSION['no_cuenta']
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'GET',
            'header'  => ['Content-Type: application/x-www-form-urlencoded','token:'.$_SESSION['token']],
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta', false, $context), true);

    
    if($result['status']==200){
        
        // header('location: ' . '../vistas/nuevaCuenta.php');
    }else{
    }

}elseif($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    $data = http_build_query(
        array(
            'token' => $_SESSION['token'],
            'id_tipo_de_cuenta' => $_SESSION['id_tipo_de_usuario'],
            'username' => $_SESSION['username'],
            'no_cuenta' => $_SESSION['no_cuenta'],
            'motivo' => $_SESSION['motivo']
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'DELETE',
            'header'  => ['Content-Type: application/x-www-form-urlencoded','token:'.$_SESSION['token']],
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta', false, $context), true);

    if($result['status']==200){
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }
}
elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $data = http_build_query(
        array(
            'id_tipo_de_cuenta' => $_SESSION['id_tipo_de_usuario'],
            'username' => $_SESSION['username'],
            'no_cuenta' => $_SESSION['no_cuenta'],
            'estado' => $_SESSION['estado'],
            'id_banco' => $_SESSION['id_banco'],
            'saldo' => $_SESSION['saldo']
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta', false, $context), true);

    if($result['status']==200){
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }
}


?>