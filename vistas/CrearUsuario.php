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
    <title>Crear Usuario</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/swiper.css" rel="stylesheet">
    <link href="../public/css/magnific-popup.css" rel="stylesheet">
    <link href="../public/css/styles.css" rel="stylesheet">
    <link href="../public/css/loginStyle.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="../public/imagenes/logoF.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <?php include "header.php" ?>
    <!-- end of preloader -->
    <div id="header" class="header">
        <div class="header-content" style=" background-image: url('../public/imagenes/header-background.jpg'); ">
            <div style="width:90%; margin-left: 5%;">

                <div class="wrapper">
                    <form action="#">
                        <div class="h5 font-weight-bold text-center mb-3">REGISTRO NUEVO USUARIO</div>
                        <div class="form-group d-flex align-items-center">
                            <div class="icon"><span class="far fa-user"></span></div>
                            <input name="usuario" autocomplete="off" type="text" class="form-control" placeholder="NombreUsuario">
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <div class="icon"><span class="far fa-envelope"></span></div>
                            <input name="correo" autocomplete="off" type="email" class="form-control" placeholder="Correo" required>
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <div class="icon"><span class="fas fa-key"></span></div>
                            <input name="password" id="password" autocomplete="off" type="password" class="form-control" placeholder="Password" required>
                            <div class="icon btn "><span id="ShowPassword" onclick="mostrarPassword();" class="ojo1 eye fa fa-eye-slash"></span></div>
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <div class="icon"><span class="fas fa-key"></span></div>
                            <input name="password" id="password2" autocomplete="off" type="password" class="form-control" placeholder="Confirmar Password" required>
                            <div class="icon btn "><span id="ShowPassword" onclick="mostrarPassword2();" class="ojo1 eye fa fa-eye-slash"></span></div>
                        </div>

                        <div class="btn btn-primary mb-3" type="submit" onclick="matchPassword();">Registrarme</div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="../public/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../public/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../public/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../public/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../public/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../public/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../public/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../public/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../public/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../public/js/scripts.js"></script> <!-- Custom scripts -->
    <script src="../public/js/nuevaCuenta.js"></script> <!-- Custom scripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function mostrarPassword2() {
            var cambio = document.getElementById("password2");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.ojo').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.ojo').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        function mostrarPassword() {
            var cambio = document.getElementById("password");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.ojo1').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.ojo1').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }

        function matchPassword() {
            var pw1 = document.getElementById("password").value;
            var pw2 = document.getElementById("password2").value;
            if (pw1 != pw2) {
                alert("Las Cotraseñas no coinciden");
            }
        }
    </script>
</body>

</html>