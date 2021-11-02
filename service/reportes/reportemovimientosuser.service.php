<?php 

// echo $_POST['elegir'];
// echo $_POST['inputEmail3'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../routes/url_route.php";
// echo $_SESSION['username'];




    $data = http_build_query(
        array(
            'fecha_final' => $_POST['fecha']
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

    $result = json_decode(file_get_contents($URL_GLOBAL.'/reporte/user/movimientos', false, $context), true);

    if($result['status']==200){
        $lista = $result['data'];
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }



?>