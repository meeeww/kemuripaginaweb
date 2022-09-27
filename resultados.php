<?php
include("config.php");
$div1gr1 = mysqli_query($mysqli, 'SELECT * FROM `Partidas` WHERE Division="1" AND Grupo="1"');
$div1gr2 = mysqli_query($mysqli, 'SELECT * FROM `Partidas` WHERE Division="1" AND Grupo="2"');
$div2gr1 = mysqli_query($mysqli, 'SELECT * FROM `Partidas` WHERE Division="2" AND Grupo="1"');
$div2gr2 = mysqli_query($mysqli, 'SELECT * FROM `Partidas` WHERE Division="2" AND Grupo="2"');
$div3gr1 = mysqli_query($mysqli, 'SELECT * FROM `Partidas` WHERE Division="3" AND Grupo="1"');
$div3gr2 = mysqli_query($mysqli, 'SELECT * FROM `Partidas` WHERE Division="3" AND Grupo="2"');
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>KGL - Kemuri Games League</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="main.css" />
    <script src="main.js"></script>

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo/white-logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" aria-label="Toggle navigation">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Partidos</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="javascript:void(0)">Calendario</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Resultados</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" aria-label="Toggle navigation">Clasificación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://localhost/kemurileague/" aria-label="Toggle navigation">Equipos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" aria-label="Toggle navigation">Jugadores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Estadísticas</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="javascript:void(0)">Equipos</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Jugadores</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Temporada</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" aria-label="Toggle navigation">Contacto</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button add-list-button">
                                <a href="javascript:void(0)" class="btn">Inscríbete</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">A poweasdrful app for your business.</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">From open source to pro services, Piqes helps you
                            to build, deploy, test, and monitor apps.</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-discord"></i> Discord</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-twitter-original"></i> Twitter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/images/hero/phone.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Features Area -->
    <br>
    </br>
    <br>
    </br>
    <span class="seleccionar" style="margin-left: 40%; font-weight: bold;"> Selecciona una división: </span>
    <select name="selector" id="selector" style="width:10%; height: 40%;" onchange="elegirResultado()">
        <optgroup label="Primera División">
            <option value="1">Grupo 1</option>
            <option value="2">Grupo 2</option>
        </optgroup>
        <optgroup label="Segunda División">
            <option value="3">Grupo 1</option>
            <option value="4">Grupo 2</option>
        </optgroup>
        <optgroup label="Tercera División">
            <option value="5">Grupo 1</option>
            <option value="6">Grupo 2</option>
        </optgroup>
    </select>
    <br>
    </br>
    <!--1Div 1Gr1-->
    <div class="cajaTablas" style="padding-right:20%; padding-left:20%">
        <img src=>
        <table id="tablaclasificacion1" style="display:inline;">
            <tr>
                <th scope="row">
                    <center>Blueside</center>
                </th>
                <th scope="row">
                    <center></center>
                </th>
                <th scope="row">
                    <center></center>
                </th>
                <th scope="row">
                    <center></center>
                </th>
                <th scope="row">
                    <center></center>
                </th>
                <th scope="row">
                    <center>Redside</center>
                </th>
                <th scope="row">
                    <center>Fecha</center>
                </th>
                <th scope="row">
                    <center>Hora</center>
                </th>
            </tr>
<!---hay que terminar como se vera la tabla--->
            <?php
            while ($res = mysqli_fetch_array($div1gr1)) {
                echo '<tr>';
                echo '<td width="2.5%"><center><img src="https://drive.google.com/uc?export=view&id=' . $res["Logo"] . '" alt="Logo" width="50%" height="50%" style="vertical-align:top"></center></td> '; //logo
                echo '<td width="10%" size="50%" style="vertical-align:middle"><center>' . $res["Nombre"] . '</center></td>'; //nombre
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Posicion"]  . '</center></td>'; //posicion
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Victorias"]  . '</center></td>'; //victorias
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Derrotas"]  . '</center></td>'; //derrotas
                echo '</tr>';
            }
            ?>
            <tr>
            </tr>
        </table>
        <!--1Div 1Gr2-->
        <table id="tablaclasificacion2" style="display: none; margin-left: 15%; margin-right: auto; width: 500px" class="table table-bordered">
            <tr>
                <th scope="row"></th>
                <th scope="row">
                    <center>Nombre</center>
                </th>
                <th scope="row">
                    <center>Posición</center>
                </th>
                <th scope="row">
                    <center>Victorias</center>
                </th>
                <th scope="row">
                    <center>Derrotas</center>
                </th>
            </tr>

            <?php
            while ($res = mysqli_fetch_array($div1gr2)) {
                echo '<tr>';
                echo '<td width="2.5%"><center><img src="https://drive.google.com/uc?export=view&id=' . $res["Logo"] . '" alt="Logo" width="50%" height="50%" style="vertical-align:top"></center></td> '; //logo
                echo '<td width="10%" size="50%" style="vertical-align:middle"><center>' . $res["Nombre"] . '</center></td>'; //nombre
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Posicion"]  . '</center></td>'; //posicion
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Victorias"]  . '</center></td>'; //victorias
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Derrotas"]  . '</center></td>'; //derrotas
                echo '</tr>';
            }
            ?>
            <tr>
            </tr>
        </table>
        <!--2Div 1Gr1-->
        <table id="tablaclasificacion3" style="display: none; margin-left: 15%; margin-right: auto; width: 500px" class="table table-bordered">
            <tr>
                <th scope="row"></th>
                <th scope="row">
                    <center>Nombre</center>
                </th>
                <th scope="row">
                    <center>Posición</center>
                </th>
                <th scope="row">
                    <center>Victorias</center>
                </th>
                <th scope="row">
                    <center>Derrotas</center>
                </th>
            </tr>

            <?php
            while ($res = mysqli_fetch_array($div2gr1)) {
                echo '<tr>';
                echo '<td width="2.5%"><center><img src="https://drive.google.com/uc?export=view&id=' . $res["Logo"] . '" alt="Logo" width="50%" height="50%" style="vertical-align:top"></center></td> '; //logo
                echo '<td width="10%" size="50%" style="vertical-align:middle"><center>' . $res["Nombre"] . '</center></td>'; //nombre
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Posicion"]  . '</center></td>'; //posicion
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Victorias"]  . '</center></td>'; //victorias
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Derrotas"]  . '</center></td>'; //derrotas
                echo '</tr>';
            }
            ?>
            <tr>
            </tr>
        </table>
        <!--2Div 1Gr2-->
        <table id="tablaclasificacion4" style="display: none; margin-left: 15%; margin-right: auto; width: 500px" class="table table-bordered">
            <tr>
                <th scope="row"></th>
                <th scope="row">
                    <center>Nombre</center>
                </th>
                <th scope="row">
                    <center>Posición</center>
                </th>
                <th scope="row">
                    <center>Victorias</center>
                </th>
                <th scope="row">
                    <center>Derrotas</center>
                </th>
            </tr>

            <?php
            while ($res = mysqli_fetch_array($div2gr2)) {
                echo '<tr>';
                echo '<td width="2.5%"><center><img src="https://drive.google.com/uc?export=view&id=' . $res["Logo"] . '" alt="Logo" width="50%" height="50%" style="vertical-align:top"></center></td> '; //logo
                echo '<td width="10%" size="50%" style="vertical-align:middle"><center>' . $res["Nombre"] . '</center></td>'; //nombre
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Posicion"]  . '</center></td>'; //posicion
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Victorias"]  . '</center></td>'; //victorias
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Derrotas"]  . '</center></td>'; //derrotas
                echo '</tr>';
            }
            ?>
            <tr>
            </tr>
        </table>
        <!--3Div 1Gr1-->
        <table id="tablaclasificacion5" style="display: none; margin-left: 15%; margin-right: auto; width: 500px" class="table table-bordered">
            <tr>
                <th scope="row"></th>
                <th scope="row">
                    <center>Nombre</center>
                </th>
                <th scope="row">
                    <center>Posición</center>
                </th>
                <th scope="row">
                    <center>Victorias</center>
                </th>
                <th scope="row">
                    <center>Derrotas</center>
                </th>
            </tr>

            <?php
            while ($res = mysqli_fetch_array($div3gr1)) {
                echo '<tr>';
                echo '<td width="2.5%"><center><img src="https://drive.google.com/uc?export=view&id=' . $res["Logo"] . '" alt="Logo" width="50%" height="50%" style="vertical-align:top"></center></td> '; //logo
                echo '<td width="10%" size="50%" style="vertical-align:middle"><center>' . $res["Nombre"] . '</center></td>'; //nombre
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Posicion"]  . '</center></td>'; //posicion
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Victorias"]  . '</center></td>'; //victorias
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Derrotas"]  . '</center></td>'; //derrotas
                echo '</tr>';
            }
            ?>
            <tr>
            </tr>
        </table>
        <!--3Div 1Gr2-->
        <table id="tablaclasificacion6" style="display: none; margin-left: 15%; margin-right: auto; width: 500px" class="table table-bordered">
            <tr>
                <th scope="row"></th>
                <th scope="row">
                    <center>Nombre</center>
                </th>
                <th scope="row">
                    <center>Posición</center>
                </th>
                <th scope="row">
                    <center>Victorias</center>
                </th>
                <th scope="row">
                    <center>Derrotas</center>
                </th>
            </tr>

            <?php
            while ($res = mysqli_fetch_array($div3gr2)) {
                echo '<tr>';
                echo '<td width="2.5%"><center><img src="https://drive.google.com/uc?export=view&id=' . $res["Logo"] . '" alt="Logo" width="50%" height="50%" style="vertical-align:top"></center></td> '; //logo
                echo '<td width="10%" size="50%" style="vertical-align:middle"><center>' . $res["Nombre"] . '</center></td>'; //nombre
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Posicion"]  . '</center></td>'; //posicion
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Victorias"]  . '</center></td>'; //victorias
                echo '<td width="2.5%" size="50%" style="vertical-align:middle"><center>' . $res["Derrotas"]  . '</center></td>'; //derrotas
                echo '</tr>';
            }
            ?>
            <tr>
            </tr>
        </table>
        <br>
        </br>
        <br>
        </br>
    </div>
    <!-- End Features Area -->


    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/white-logo.svg" alt="#">
                                </a>
                            </div>
                            <p>Making the world a better place through constructing elegant hierarchies.</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-discord"></i></a></li>
                            </ul>
                            <p class="copyright-text">Designed and Developed by <a href="https://uideck.com/" rel="nofollow" target="_blank">UIdeck</a>
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Solutions</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Marketing</a></li>
                                        <li><a href="javascript:void(0)">Analytics</a></li>
                                        <li><a href="javascript:void(0)">Commerce</a></li>
                                        <li><a href="javascript:void(0)">Insights</a></li>
                                        <li><a href="javascript:void(0)">Promotion</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Support</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Pricing</a></li>
                                        <li><a href="javascript:void(0)">Documentation</a></li>
                                        <li><a href="javascript:void(0)">Guides</a></li>
                                        <li><a href="javascript:void(0)">API Status</a></li>
                                        <li><a href="javascript:void(0)">Live Support</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Company</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">About Us</a></li>
                                        <li><a href="javascript:void(0)">Our Blog</a></li>
                                        <li><a href="javascript:void(0)">Jobs</a></li>
                                        <li><a href="javascript:void(0)">Press</a></li>
                                        <li><a href="javascript:void(0)">Contact Us</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Legal</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)">Catering Services</a></li>
                                        <li><a href="javascript:void(0)">Customer Relations</a></li>
                                        <li><a href="javascript:void(0)">Innovation</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html>