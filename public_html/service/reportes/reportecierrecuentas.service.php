<?php 

// echo $_POST['elegir'];
// echo $_POST['inputEmail3'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../routes/url_route.php";
    $data = http_build_query(
        array(
            'fecha_final' => $_POST['fecha_final']
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/reporte/cierre_de_cuentas', false, $context), true);

    if($result['status']==200){
        $lista = $result['data'];
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }


?>