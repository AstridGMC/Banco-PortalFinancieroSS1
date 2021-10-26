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
    <title>Crear Cuenta</title>


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
    <link href="../public/css/nuevaCuenta1Style.css" rel="stylesheet">

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
    <!-- end of preloader -->
    <div id="header" class="header">
        <div class="header-content" style=" background-image: url('../public/imagenes/header-background.jpg'); ">
            <div style="width:90%; margin-left: 5%; margin-top:0%">
                <div class=" text-center p-0 mt-5 " style="width:100%;">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="margin: 2%;;">
                        <h2 id="heading">Nueva Cuenta</h2>
                        <p></p>
                        <form id="msform" style="padding: 5%;" method="POST" action="">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Tipo</strong></li>
                                <li id="personal"><strong>usuario</strong></li>
                                <!-- <li id="payment"><strong>Image</strong></li>-->
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Escoja un tipo de Cuenta:</h2>
                                        </div>
                                    </div>
                                    <div id="container">
                                        <div id="pricecontainer">
                                            <p id="txt1">Abrir Nueva Cuenta</p>
                                            <div id="part1" class="parts">
                                                <p class="title"> BASIC</p>
                                                <hr class="hrline">
                                                <p class="storage">Cuenta manejada en:</p>
                                                <p class="user">Quetzales</p>
                                                <p class="site">Monto Apertura:</p>
                                                <p class="price">Q.200</p>
                                                <button type='button' class="buy" id="elegir" onclick="cambiarBasic()">Elegir <i class="fas fa-arrow-circle-right fa-xs"></i></button>
                                            </div>
                                            <div id="part2" class="parts">
                                                <p class="title">PREMIUM</p>
                                                <hr class="hrline">
                                                <p class="storage">Cuenta manejada en:</p>
                                                <p class="user"> Dolares</p>
                                                <p class="site">Monto Apertura:</p>
                                                <p class="price">$ 50 </p>
                                                <button type='button' class="buy" id="elegir" onclick="cambiarPremium()">Elegir <i class="fas fa-arrow-circle-right fa-xs"></i></button>
                                            </div>
                                            <div id="part3" class="parts">
                                                <p class="title">PLUS</p>
                                                <hr class="hrline">
                                                <p class="storage">Cuenta Manejada en:</p>
                                                <p class="user">Euros</p>
                                                <p class="site">Monto Apertura:</p>
                                                <p class="price">€ 50</p>
                                                <button type='button' class="buy" onclick="cambiarPlus()">Elegir <i class="fas fa-arrow-circle-right fa-xs"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tipoText" style="display: none;">
                                </div>
                                <input type="text" name="tipo" value="" id="tipo" hidden />
                                <input type="button" name="next" id="next" class="next action-button" value="Siguente" style="display: none;" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Usuario Cuenta:</h2>
                                        </div>
                                    </div>
                                    <div style="padding-left: 5rem;padding-right:5rem;">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Usuario</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password Admin</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->

        <!-- Scripts -->

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
        <script>
            $(document).ready(function() {

                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;
                var current = 1;
                var steps = $("fieldset").length;

                setProgressBar(current);

                $(".next").click(function() {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                });

                $(".previous").click(function() {

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                    //show the previous fieldset
                    previous_fs.show();

                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(--current);
                });

                function setProgressBar(curStep) {
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".progress-bar")
                        .css("width", percent + "%")
                }

                $(".submit").click(function() {
                    return false;
                })

            });
        </script> <!-- Custom scripts -->
</body>
</body>

</html>