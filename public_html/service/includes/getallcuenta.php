<?php 

include "../routes/url_route.php";
$data = http_build_query(
    array()
);

$opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => ['Content-Type: application/x-www-form-urlencoded','token:'.$_SESSION['token']],
        'content' => $data
    )
);

$context  = stream_context_create($opts);

$result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta/all', false, $context), true);

if($result['status']==200){
    $listCuentas = $result['data'];
}else{
    $mensajeError = $result['mensaje_informativo'];
    echo $result['mensaje_informativo'];
    // header('location: ' . '../vistas/ModificarTaza.php');
}
// $listMonedas = $result;
?>