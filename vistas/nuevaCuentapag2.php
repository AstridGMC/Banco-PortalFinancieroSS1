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
    <title>Nueva Cuenta</title>


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
    <div id="header" class="header">
        <div class="header-content" style=" background-image: url('../public/imagenes/header-background.jpg'); ">
            <div id="principal">
                <form class="formulario" method="POST" action="">
                    <h2>CONFIRMAR DATOS</h2>
                    <h3 class="texto">Datos Usuario</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" class="texto">Correo Usuario</label>
                            <input type="email" class="form-control" id="inputEmail4" name="correo" value="<?php $usuario ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="texto">Password</label>
                            <input type="text" class="form-control" id="inputPassword4" name="" placeholder="Dato" disabled>
                        </div>
                    </div>
                    <h3 style="text-align: left;">Datos Cuenta</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Tipo Cuenta</label>
                            <input type="text" class="form-control" name="tipo" value="<?php $tipo ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="texto">Monto Apertura</label>
                            <input type="text" class="form-control" value="<?php $monto ?>" disabled>
                        </div>
                    </div>
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input name="notificaciones" type="checkbox" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Recibir Notificaciones</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
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
    <script src="../public/js/nuevaCuenta.js"></script> <!-- Custom scripts -->
</body>

</html>