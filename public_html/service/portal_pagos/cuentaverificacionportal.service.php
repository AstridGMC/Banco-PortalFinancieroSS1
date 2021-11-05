<?php 

// echo $_POST['elegir'];
// echo $_POST['inputEmail3'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../routes/url_route.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $data = http_build_query(
        array(
            'identificador' => $_POST['identificador']
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta/verificacion/portal_pagos', false, $context), true);

    if($result['status']==200){
        $cuenta_verificacion = $result['data'];
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }


}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){

}elseif($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    
}
elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
    
}


?>