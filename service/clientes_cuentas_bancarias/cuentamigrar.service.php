<?php 

// echo $_POST['elegir'];
// echo $_POST['inputEmail3'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../../routes/url_route.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $data = http_build_query(
        array(
            'id_tipo_de_cuenta' => $_POST['nueva_cuenta'],
            'no_cuenta' => $_POST['no_cuenta'],
            'estado' => $_POST['estado']
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta/migrar_cuenta', false, $context), true);

    if($result['status']==200){
        header('location: ' . '../../vistas/introducirCuenta.php');
    }else{
    }


}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){

}elseif($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    
}
elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
    
}


?>