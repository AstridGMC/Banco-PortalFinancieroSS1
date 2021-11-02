<?php 
include "../routes/url_route.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = http_build_query(
        array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
            )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $data
        )
    );

    $context  = stream_context_create($opts);

    $result = json_decode(file_get_contents($URL_GLOBAL.'/login', false, $context), true);


    // print_r($obj);
    if(isset($result->$result['mensaje_informativo'])){
        header('location: ' . '../vistas/login.php');
    }else{
        session_start();
        $_SESSION['username'] = $result['username'];
        // $_SESSION['id_cuenta'] = $result['id_cuenta'];
        $_SESSION['id_tipo_de_usuario'] = $result['id_tipo_de_usuario'];
        $_SESSION['token'] = $result['token'];
        header('location: ' . '../vistas/index.php');
    }


}else if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //LOGOUT EN TODO CASO

}

?>

