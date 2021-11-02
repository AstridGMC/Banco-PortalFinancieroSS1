<?php 

include "../routes/url_route.php";


$data = http_build_query(
    array(
        'no_cuenta' => $_POST['no_cuenta']
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
    $usuario = $result['data'];
}else{
    $mensajeError = $result['mensaje_informativo'];
    echo $result['mensaje_informativo'];
    // header('location: ' . '../vistas/ModificarTaza.php');
}
// $listMonedas = $result;
?>