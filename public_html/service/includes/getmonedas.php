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

$result = json_decode(file_get_contents($URL_GLOBAL.'/moneda', false, $context), true);

// echo var_dump($http_response_header);
// echo $result->status
// print_r($obj);
if($result['status']==200){
    // echo 'es 200';
    $listMonedas = $result['data'];
    // foreach 
    // header('location: ' . '../vistas/ModificarTaza.php');
}else{
    $mensajeError = $result['mensaje_informativo'];
    echo $result['mensaje_informativo'];
    // header('location: ' . '../vistas/ModificarTaza.php');
}
// $listMonedas = $result;
?>