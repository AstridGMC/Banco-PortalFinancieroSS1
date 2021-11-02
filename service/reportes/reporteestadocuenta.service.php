<?php 

// echo $_POST['elegir'];
// echo $_POST['inputEmail3'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../routes/url_route.php";
    $data = http_build_query(
        array(
            
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/reporte/estado_de_cuenta', false, $context), true);

    if($result['status']==200){
        $cuentas_congeladas = $result['cuentas_congeladas'];
        $cuentas_activas = $result['cuentas_activas'];
        $cuentas_cerradas = $result['cuentas_cerradas'];
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }



?>