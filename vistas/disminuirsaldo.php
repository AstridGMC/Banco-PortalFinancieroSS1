<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Introducir Cuenta</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.1/dist/jquery-steps.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/swiper.css" rel="stylesheet">
    <link href="../public/css/magnific-popup.css" rel="stylesheet">
    <link href="../public/css/styles.css" rel="stylesheet">
    <link href="../public/css/nuevaCuenta2Style.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="../public/imagenes/logoF.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <?php include "header.php" ?>
    <?php if(isset($_POST['no_cuenta'])){
        
        include "../service/includes/getCuenta.php";
        //include "../service/includes/getbancos.php";
    }else {
        // echo $_GET['mno_cuenta'];
    } ?>
    <div id="header" class="header">
        <div class="header-content" style=" background-image: url('../public/imagenes/header-background.jpg'); ">
            <div id="principal">
                <form class='formularioCentrado'  method='POST' action="../service/clientes_cuentas_bancarias/cuentadisminuir.service.php">
                    <h1 style="color: black;">Cantidad que se Disminuye</h1>
                    <div class="form-group row" style="padding-top: 5%">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Cantidad</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                            <!-- <label for="inputCity" class="texto">Numero Cuenta</label> -->
                            <!-- <input type="text" class="form-control" id="cuenta" name="cuenta" value="<?php //echo $usuario['no_cuenta'] ?>" disabled> -->
                            <input type="text" class="form-control" id="no_cuenta" name="no_cuenta" value="<?php echo $usuario['no_cuenta'] ?>" hidden>
                        </div>
                    <div class="form-group row">
                        <div class="mx-auto">

                            <button type="submit" class="btn btn-primary">Disminuir Saldo</button>
                        </div>
                    </div>
                </form>
                <?php if(isset($usuario)){ ?>
                <form class="formulario" method="POST" action="../service/clientes_cuentas_bancarias/cuentamigrar.service.php" >
                    <h2>Detalle Cuenta</h2>
                    <!-- <h3 class="texto">Datos Usuario</h3> -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="texto">Correo Usuario</label>
                            <input type="email" class="form-control" id="identificador1" name="identificador1" value="<?php echo $usuario['identificador'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="texto">Nombre</label>
                            <input type="text" class="form-control" id="username_propietario1" name="username_propietario1" placeholder="nombre" value="<?php echo $usuario['username_propietario'] ?>" disabled>
                            <input type="text" class="form-control" id="username_propietario" name="username_propietario" placeholder="nombre" value="<?php echo $usuario['username_propietario'] ?>" hidden>
                        </div>
                    </div>
                    <h3 style="text-align: left;">Datos Cuenta</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Numero Cuenta</label>
                            <input type="text" class="form-control" id="cuenta" name="cuenta" value="<?php echo $usuario['no_cuenta'] ?>" disabled>
                            <input type="text" class="form-control" id="no_cuenta" name="no_cuenta" value="<?php echo $usuario['no_cuenta'] ?>" hidden>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Tipo Cuenta</label>
                            <?php 
                                if($usuario['id_tipo_de_cuenta']==1){
                                    
                                    echo '<input type="text" class="form-control" name="tipo" value="Basic" disabled>';
                                }elseif($usuario['id_tipo_de_cuenta']==2){
                                    echo '<input type="text" class="form-control" name="tipo" value="Premium" disabled>';
                                }elseif($usuario['id_tipo_de_cuenta']==3){
                                    echo '<input type="text" class="form-control" name="tipo" value="Plus" disabled>';
                                }
                                echo '<input type="text" class="form-control" name="id_tipo_de_usuario" value="'.$usuario['id_tipo_de_cuenta'].'"  hidden>';
                            ?>
                        </div>
                        <div>
                            <?php echo '<input type="text" class="form-control" name="id_banco" value="'.$usuario['id_banco'].'"  hidden>'; ?>
                            <?php echo '<input type="text" class="form-control" name="estado" value="'.$usuario['estado'].'"  hidden>'; ?>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Fecha Apertura</label>
                            <input type="text" class="form-control" name="fecha_hora_de_creacion" value="<?php echo $usuario['fecha_hora_de_creacion'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Saldo Actual</label>
                            <input type="text" class="form-control" name="saldo1" value="<?php echo $usuario['saldo'] ?>" disabled>
                            <input type="text" class="form-control" name="saldo" value="<?php echo $usuario['saldo'] ?>" hidden>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Estado Actual</label>
                            <input type="text" class="form-control" name="estado1" value="<?php echo $usuario['estado'] ?>" disabled>
                            
                        </div>
                    </div>
                    
                    <!-- <input type="submit" class="btn btn-primary" value="Cambiar Cuenta" input> -->
                </form>
                <?php } ?>
                <?php unset($usuario); ?>
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../public/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../public/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../public/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../public/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../public/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../public/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../public/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../public/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>