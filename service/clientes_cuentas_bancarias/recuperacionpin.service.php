<?php 

// echo $_POST['elegir'];
// echo $_POST['inputEmail3'];
// echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../../routes/url_route.php";
session_start();
    $data = http_build_query(
        array(
            'username' => $_GET['username']
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => ['Content-Type: application/x-www-form-urlencoded'],
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/recuperacionPin', false, $context), true);

    if($result['status']==200){
        // $lista = $result['data'];
        header('location: ' . '../../vistas/index.php');
    }else{
    }



?>