<?php 

echo $_POST['elegir'];
echo $_POST['inputEmail3'];
echo $_POST['inputPassword3'];
// header('location: ' . '../vistas/index.php');

include "../routes/url_route.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){

}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){

}elseif($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    
}
elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $data = http_build_query(
        array(
            'id_tipo_de_cuenta' => $_SESSION['id_tipo_de_usuario'],
            'username' => $_SESSION['username'],
            'no_cuenta' => $_SESSION['no_cuenta'],
            'cantidad' => $_SESSION['cantidad']
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'PUT',
            'header'  => 'Content-Type: application/x-www-form-urlencoded, token:'.$_SESSION['token'],
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/cuenta/deposito', false, $context), true);

    if($result['status']==200){
        // header('location: ' . '../vistas/ModificarTaza.php');
    }else{
    }
}


?>