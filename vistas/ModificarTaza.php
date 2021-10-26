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
    <title>Modificar Taza</title>


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
                <form class='formularioCentrado' method="POST" action="">
                    <h1 style="color: black;">Modificar Taza de Cambio</h1>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Moneda</label>
                            <select id="monedas" name="monedas" class="custom-select my-1 mr-sm-4" id="inlineFormCustomSelectPref">
                                <option>Monedas</option>
                                <?php
                                /*foreach ($tipos as $tipo) {
                                    echo "<option value='".$valorMoneda."'>".$tipo."</option>";
                                }*/
                                ?>
                                <option value="7.50">Dolares</option>
                                <option value="10.00">Euros</option>
                            </select>
                        </div>
                        <!--se llena automaticamente al dar click en una moneda-->
                        <div class="col-md-4 mb-3">
                            <label>Taza Actual</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">Q.</span>
                                </div>
                                <input type="text" class="form-control" id="taza" placeholder="Taza" aria-describedby="inputGroupPrepend" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" style="padding-top: 5%; text-align: left;">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nueva Taza</label>
                        <div class="col-sm-8">
                            <input name="tazaNueva" type="number" class="form-control" id="inputEmail3" placeholder="Nueva Taza" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary">Cambiar</button>
                        </div>
                    </div>
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
    <script>
        var select = document.getElementById('monedas');
        var taza = document.getElementById('taza');
        select.addEventListener('change',
            function() {
                var selectedOption = this.options[select.selectedIndex];
                taza.value = selectedOption.value
                console.log(selectedOption.value + ': ' + selectedOption.text);
            });
    </script>
</body>

</html>