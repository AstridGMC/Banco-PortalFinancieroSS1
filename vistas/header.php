<?php include "../service/session.service.php" ?>

<link href="../public/css/fontawesome-all.css" rel="stylesheet">
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <a class="navbar-brand logo-image" href="index.php"><img src="../public/imagenes/logoFinanzas.svg" alt="alternative"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <!-- <a class="nav-link page-scroll" href="login.php">Inicio Sesion</a> -->
            </li>
            <!--ADMINISTRACION-->
            <li class="nav-item">
                <?php
                                // session_start();
                                if($_SESSION['id_tipo_de_usuario']==1){
                                    echo "<a class=\"nav-link page-scroll\" href=\"ModificarTaza.php\">Modificar Taza Cambio</a>";
                                }
                ?>
            </li>
            <?php if($_SESSION['id_tipo_de_usuario']==1){ ?> 
                
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="nuevaCuenta.php"><span class="item-text">Crear Cuenta</span></a>
                    <a class="dropdown-item" href="administracionCuentas.php"><span class="item-text">Administracion Cuentas</span></a>
                    <a class="dropdown-item" href="introducirCuenta.php?tipoF=cambiarTipo"><span class="item-text">Cambiar Tipo Cuenta</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <!-- <a class="dropdown-item" href="CrearUsuario.php"><span class="item-text">Crear Usuario</span></a> -->
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ReporteIngresosEgresos.php"><span class="item-text">Movimientos de Cuentas</span></a>
                    <a class="dropdown-item" href="ReporteCuentasCongeladas.php"><span class="item-text">Cuentas Congeladas</span></a>
                    <a class="dropdown-item" href="detalleunacuenta.php"><span class="item-text">Detalle de Cuenta</span></a>
                    <a class="dropdown-item" href="ReporteCuentas.php"><span class="item-text">Reporta de Cuentas</span></a>
                    <a class="dropdown-item" href="ReporteCierre.php"><span class="item-text">Reporte de Cierre</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                </div>
            </li>
            <?php } ?>
            <!--usuarios-->
            <?php if($_SESSION['id_tipo_de_usuario']==2){ ?>                    
            <li class="nav-item">
                <a class="nav-link page-scroll" href="ReporteMovimientosUsuario.php">Reporte Movimientos</a>
            </li>
            <?php } ?>   
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="RecuperarPin.php"><span class="item-text">Recuperar Pin</span></a> -->
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="../service/logout.service.php"><span class="item-text">Cerrar Sesion</span></a>
                </div>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav>

<?php include "modal.php" ?>