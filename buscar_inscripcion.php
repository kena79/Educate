﻿<?php

// session_start();


require_once "acceso.php";
// $info = mysqli_query($conexion, "SELECT U.`id`, U.`cod_estudiantil`, U.`email`, U.`password`, U.`fecha_ult`, U.`fechareg`, U.`activo`, E.*
// FROM `user` As U
// INNER JOIN estudiantes As E On E.id_user = U.id
// WHERE U.id = $user_id AND U.activo = 1");
// $resInfo = mysqli_fetch_row($info);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shortcode Contact Form || Educat</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts
		============================================ -->
    <link href='../../../css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Color Swithcer CSS
		============================================ -->
    <link rel="stylesheet" href="css/color-switcher.css">

    <!-- Fontawsome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Metarial Iconic Font CSS
		============================================ -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Plugins CSS
		============================================ -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- Color CSS
		============================================ -->
    <link rel="stylesheet" href="css/color.css">

    <!-- Responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Color Css Files
		============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-one.css" title="color-one" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-two.css" title="color-two" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-three.css" title="color-three" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-four.css" title="color-four" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-five.css" title="color-five" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-six.css" title="color-six" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-seven.css" title="color-seven" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-eight.css" title="color-eight" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-nine.css" title="color-nine" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-ten.css" title="color-ten" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/color-ten.css" title="color-ten" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren1.css" title="pattren1" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren2.css" title="pattren2" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren3.css" title="pattren3" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren4.css" title="pattren4" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/pattren5.css" title="pattren5" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/background1.css" title="background1" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/background2.css" title="background2" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/background3.css" title="background3" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/background4.css" title="background4" media="screen">
    <link rel="alternate stylesheet" type="text/css" href="switcher/background5.css" title="background5" media="screen">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--Main Wrapper Start-->
    <div class="as-mainwrapper">
        <!--Bg White Start-->
        <div class="bg-white">
            <!--Header Area Start-->
            <header>
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-5 d-none d-lg-block d-md-block">
                                <span>Have any question? +968 547856 254</span>
                            </div>
                            <div class="col-lg-5 col-md-7 col-12">
                                <div class="header-top-right">
                                    <div class="content"><a href="#"><i class="zmdi zmdi-account"></i> My Account</a>
                                        <ul class="account-dropdown">
                                            <li><a href="login-register.html">My Account</a></li>
                                            <li><a href="login-register.html">Log In</a></li>
                                            <li><a href="login-register.html">Register</a></li>
                                            <li><a href="latest-news.html">Blog</a></li>
                                        </ul>
                                    </div>
                                    <div class="content"><a href="#"><i class="zmdi zmdi-favorite"></i> Wishlist</a></div>
                                    <div class="content"><a href="#"><i class="zmdi zmdi-shopping-basket"></i> Chechout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-logo-menu sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt="EDUCAT"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-12">
                                <div class="mainmenu-area pull-right">
                                    <div class="mainmenu d-none d-lg-block">
                                        <nav>
                                            <ul id="nav">
                                                <li class="current"><a href="index.html">Home</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index.html">Slider Style 1</a></li>
                                                        <li><a href="index-2.html">Slider Style 2</a></li>
                                                        <li><a href="index-3.html">Background Image</a></li>
                                                        <li><a href="index-4.html">Image Overlay Light</a></li>
                                                        <li><a href="index-5.html">Image Overlay Dark</a></li>
                                                        <li><a href="index-6.html">Menu With Slider</a></li>
                                                        <li><a href="index-7.html">Menu With Image</a></li>
                                                        <li><a href="index-8.html">Menu With Overlay</a></li>
                                                        <li><a href="index-9.html">Video Background</a></li>
                                                        <li><a href="index-10.html">Fixed Image</a></li>
                                                        <li><a href="index-11.html">Overlay Fixed Image</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="courses.html">Courses</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="courses-details.html">Courses Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html">Features</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Sliders<i class="zmdi zmdi-chevron-right"></i></a>
                                                            <ul class="inside-menu">
                                                                <li><a href="slider-style-1.html">Slider Style 1</a></li>
                                                                <li><a href="slider-style-2.html">Slider Style 2</a></li>
                                                                <li><a href="slider-style-3.html">Slider Style 3</a></li>
                                                                <li><a href="background-image.html">Image Background </a></li>
                                                                <li><a href="image-overlay-light.html">Overlay Light </a></li>
                                                                <li><a href="image-overlay-dark.html">Overlay Dark </a></li>
                                                                <li><a href="video-background.html">Video Background </a></li>
                                                                <li><a href="fixed-image.html">Fixed Image</a></li>
                                                                <li><a href="overlay-fixed-image.html">Overlay Fixed Image</a></li>
                                                                <li><a href="text-animation-1.html">Text Animation 1 </a></li>
                                                                <li><a href="text-animation-2.html">Text Animation 2 </a></li>
                                                                <li><a href="text-animation-3.html">Text Animation 3 </a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Menu Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                            <ul class="inside-menu">
                                                                <li><a href="theme-menu-1.html">Theme Menu 1</a></li>
                                                                <li><a href="theme-menu-2.html">Theme Menu 2</a></li>
                                                                <li><a href="theme-menu-3.html">Theme Menu 3</a></li>
                                                                <li><a href="without-top-bar.html">Without Top Bar</a></li>
                                                                <li><a href="menu-center.html">Menu Center</a></li>
                                                                <li><a href="menu-transparent.html">Transparent</a></li>
                                                                <li><a href="menu-semi-transparent.html">Semi Transparent</a></li>
                                                                <li><a href="menu-dark.html">Menu Dark</a></li>
                                                                <li><a href="borderd-menu.html">Menu Border</a></li>
                                                                <li><a href="menu-top-border.html">Top Border Hover</a></li>
                                                                <li><a href="menu-sticky.html">Menu Sticky</a></li>
                                                                <li><a href="menu-non-sticky.html">Menu Non Sticky</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Page Title<i class="zmdi zmdi-chevron-right"></i></a>
                                                            <ul class="inside-menu">
                                                                <li><a href="breadcrumb-dark.html">Title Dark</a></li>
                                                                <li><a href="breadcrumb-fixed.html">Title Fixed</a></li>
                                                                <li><a href="breadcrumb-image.html">Title Image</a></li>
                                                                <li><a href="breadcrumb-transparent.html">Title Transparent</a></li>
                                                                <li><a href="breadcrumb-left.html">Title Left</a></li>
                                                                <li><a href="breadcrumb-right.html">Title Right</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Footer Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                            <ul class="inside-menu">
                                                                <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                                <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                                                <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                                                <li><a href="footer-style-4.html">Footer Style 4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html">Shortcode</a>
                                                    <!-- Mega Menu -->
                                                    <div class="mega-menu mm-5-column">
                                                        <div class="col-4 pull-left pl-20">
                                                            <h3>Shortcode List</h3>
                                                            <a href="shortcode-course.html">Courses</a>
                                                            <a href="shortcode-event.html">Event</a>
                                                            <a href="shortcode-latest-news.html">Latest News</a>
                                                            <a href="shortcode-product.html">Product</a>
                                                            <a href="shortcode-testimonial.html">Testimonial</a>
                                                        </div>
                                                        <div class="col-4 pull-left">
                                                            <h3>Shortcode List</h3>
                                                            <a href="shortcode-contact-form.html">Contact Form</a>
                                                            <a href="shortcode-map.html">Map</a>
                                                            <a href="shortcode-facts.html">Facts</a>
                                                            <a href="image-gallery.html">Image Gallery</a>
                                                            <a href="video-gallery.html">Video Gallery</a>
                                                        </div>
                                                        <div class="col-4 pull-left">
                                                            <h3>Shortcode List</h3>
                                                            <a href="shortcode-alerts.html">Alerts</a>
                                                            <a href="shortcode-button.html">Button</a>
                                                            <a href="shortcode-breadcrumbs.html">Breadcrumb</a>
                                                            <a href="shortcode-dropdown.html">Dropdown</a>
                                                            <a href="shortcode-pagination.html">Pagination</a>
                                                        </div>
                                                        <div class="col-4 pull-left">
                                                            <h3>Shortcode List</h3>
                                                            <a href="shortcode-progressbar.html">Progressbar</a>
                                                            <a href="text-animation-1.html">Text Animation 1</a>
                                                            <a href="text-animation-2.html">Text Animation 2</a>
                                                            <a href="text-animation-3.html">Text Animation 3</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="index.html">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="courses.html">Courses Page</a></li>
                                                        <li><a href="courses-details.html">Course Details Page</a></li>
                                                        <li><a href="event.html">Event Page</a></li>
                                                        <li><a href="event-details.html">Event Details Page</a></li>
                                                        <li><a href="latest-news.html">Latest News Page</a></li>
                                                        <li><a href="news-details.html">News Details Page</a></li>
                                                        <li><a href="shop-grid.html">Shop Page</a></li>
                                                        <li><a href="product-details.html">Product Details Page</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="login-register.html">Login Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid.html">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-search">
                                        <li class="search-menu">
                                            <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                        </li>
                                    </ul>
                                    <!--Search Form-->
                                    <div class="search">
                                        <div class="search-form">
                                            <form id="search-form" action="#">
                                                <input type="search" placeholder="Search here..." name="search">
                                                <button type="submit">
                                                    <span><i class="fa fa-search"></i></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End of Search Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area start -->
                <div class="mobile-menu-area">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="index.html">HOME</a>
                                                <ul>
                                                    <li><a href="index.html">Slider Style 1</a></li>
                                                    <li><a href="index-2.html">Slider Style 2</a></li>
                                                    <li><a href="index-3.html">Background Image</a></li>
                                                    <li><a href="index-4.html">Image Overlay Light</a></li>
                                                    <li><a href="index-5.html">Image Overlay Dark</a></li>
                                                    <li><a href="index-6.html">Menu With Slider</a></li>
                                                    <li><a href="index-7.html">Menu With Image</a></li>
                                                    <li><a href="index-8.html">Menu With Overlay</a></li>
                                                    <li><a href="index-9.html">Video Background</a></li>
                                                    <li><a href="index-10.html">Fixed Image</a></li>
                                                    <li><a href="index-11.html">Overlay Fixed Image</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="courses.html">Courses</a>
                                                <ul class="sub-menu">
                                                    <li><a href="courses-details.html">Courses Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="event.html">Event</a>
                                                <ul class="sub-menu">
                                                    <li><a href="event-details.html">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.html">Shortcode</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shortcode-course.html">Courses</a></li>
                                                    <li><a href="shortcode-event.html">Event</a></li>
                                                    <li><a href="shortcode-latest-news.html">Latest News</a></li>
                                                    <li><a href="shortcode-product.html">Product</a></li>
                                                    <li><a href="shortcode-testimonial.html">Testimonial</a></li>
                                                    <li><a href="shortcode-contact-form.html">Contact Form</a></li>
                                                    <li><a href="shortcode-map.html">Map</a></li>
                                                    <li><a href="shortcode-facts.html">Facts</a></li>
                                                    <li><a href="image-gallery.html">Image Gallery</a></li>
                                                    <li><a href="video-gallery.html">Video Gallery</a></li>
                                                    <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                    <li><a href="shortcode-button.html">Button</a></li>
                                                    <li><a href="shortcode-breadcrumbs.html">Breadcrumb</a></li>
                                                    <li><a href="shortcode-dropdown.html">Dropdown</a></li>
                                                    <li><a href="shortcode-pagination.html">Pagination</a></li>
                                                    <li><a href="shortcode-progressbar.html">Progressbar</a></li>
                                                    <li><a href="text-animation-1.html">Text Animation 1</a></li>
                                                    <li><a href="text-animation-2.html">Text Animation 2</a></li>
                                                    <li><a href="text-animation-3.html">Text Animation 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="latest-news.html">Latest News</a>
                                                <ul class="sub-menu">
                                                    <li><a href="news-details.html">News Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.html">Features</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Sliders</a>
                                                        <ul>
                                                            <li><a href="slider-style-1.html">Slider Style 1</a></li>
                                                            <li><a href="slider-style-2.html">Slider Style 2</a></li>
                                                            <li><a href="slider-style-3.html">Slider Style 3</a></li>
                                                            <li><a href="background-image.html">Image Background </a></li>
                                                            <li><a href="image-overlay-light.html">Overlay Light </a></li>
                                                            <li><a href="image-overlay-dark.html">Overlay Dark </a></li>
                                                            <li><a href="video-background.html">Video Background </a></li>
                                                            <li><a href="fixed-image.html">Fixed Image</a></li>
                                                            <li><a href="overlay-fixed-image.html">Overlay Fixed Image</a></li>
                                                            <li><a href="text-animation-1.html">Text Animation 1 </a></li>
                                                            <li><a href="text-animation-2.html">Text Animation 2 </a></li>
                                                            <li><a href="text-animation-3.html">Text Animation 3 </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Style</a>
                                                        <ul>
                                                            <li><a href="theme-menu-1.html">Theme Menu 1</a></li>
                                                            <li><a href="theme-menu-2.html">Theme Menu 2</a></li>
                                                            <li><a href="theme-menu-3.html">Theme Menu 3</a></li>
                                                            <li><a href="without-top-bar.html">Without Top Bar</a></li>
                                                            <li><a href="menu-center.html">Menu Center</a></li>
                                                            <li><a href="menu-transparent.html">Transparent</a></li>
                                                            <li><a href="menu-semi-transparent.html">Semi Transparent</a></li>
                                                            <li><a href="menu-dark.html">Menu Dark</a></li>
                                                            <li><a href="borderd-menu.html">Menu Border</a></li>
                                                            <li><a href="menu-top-border.html">Top Border Hover</a></li>
                                                            <li><a href="menu-sticky.html">Menu Sticky</a></li>
                                                            <li><a href="menu-non-sticky.html">Menu Non Sticky</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Page Title</a>
                                                        <ul>
                                                            <li><a href="breadcrumb-dark.html">Title Dark</a></li>
                                                            <li><a href="breadcrumb-fixed.html">Title Fixed</a></li>
                                                            <li><a href="breadcrumb-image.html">Title Image</a></li>
                                                            <li><a href="breadcrumb-transparent.html">Title Transparent</a></li>
                                                            <li><a href="breadcrumb-left.html">Title Left</a></li>
                                                            <li><a href="breadcrumb-right.html">Title Right</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Footer Style</a>
                                                        <ul>
                                                            <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                            <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                                            <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                                            <li><a href="footer-style-4.html">Footer Style 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="login-register.html">Login Register</a></li>
                                            <li><a href="contact.html">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area end -->
            </header>
            <!--End of Header Area-->

            <!--Contact Form Area Start-->
            <div class="contact-form-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto ml-auto">
                            <h4 class="contact-title text-center">Pre-Inscripciones en Línea</h4>
                            <p class="text-justify">Con el diligenciamiento del formulario de inscripción que encontrará a continuación, usted iniciará el proceso de admisión de su hijo(a),
                                además recuerde presentar las notas más recientes del colegio actual para agendar una cita para presentar evaluación Diagnostica, Académica y Psicologíca.</p>
                            <form id="frmBuscarAspirante" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        Tipo Doc.
                                        <div class="select large">
                                            <select name="txtTipoDoc" id="txtTipoDoc" required>
                                                <option value="">Seleccione...</option>
                                                <option>Cedula de ciudadanía</option>
                                                <option>Tarjeta de identidad</option>
                                                <option>Registro civil</option>
                                                <option>Pasaporte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        Identificación del aspirante: (*)
                                        <input type="number" name="txtNoDocumento" id="txtNoDocumento" placeholder="No Documento" min="0" required>
                                    </div>
                                    <div class="col-md-4"><br>
                                        <button type="submit" class="button-default btn-block" style="height: 48px;">Consultar</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Contact Form-->

            <!--Newsletter Area Start-->
            <div class="newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="newsletter-content">
                                <h4>Suscribete</h4>
                                <h5>a nuestro boletín</h5>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="newsletter-form angle">
                                <form action="#" id="mc-form" class="mc-form footer-newsletter fix">
                                    <div class="subscribe-form">
                                        <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                                        <button id="mc-submit" type="submit">SUBSCRIBE</button>
                                    </div>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre fix pull-right">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Newsletter Area-->
            <!--Footer Widget Area Start-->
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo/footer.png" alt=""></a>
                                </div>
                                <p>There are many variations of passg of Lorem Ipsum available, but thmajority have suffered altem, </p>
                                <div class="social-icons">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <h3>GET IN TOUCH</h3>
                                <a href="tel:555-555-1212"><i class="fa fa-phone"></i>555-555-1212</a>
                                <span><i class="fa fa-envelope"></i>info@example.com</span>
                                <span><i class="fa fa-globe"></i>www.educat.com</span>
                                <span><i class="fa fa-map-marker"></i>ur address goes here,street.</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <h3>Useful Links</h3>
                                <ul class="footer-list">
                                    <li><a href="#">Teachers &amp; Staff</a></li>
                                    <li><a href="#">Our Courses</a></li>
                                    <li><a href="#">Courses Categories</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Footer Widget Area-->
            <!--Footer Area Start-->
            <footer class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-12">
                            <span>Copyright &copy; Educat 2022.All right reserved.Created by <a href="#">Educat</a></span>
                        </div>
                        <div class="col-lg-6 col-md-5 col-12">
                            <div class="column-right">
                                <span>Privacy Policy , Terms &amp; Conditions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--End of Footer Area-->
        </div>
        <!--End of Bg White-->
    </div>
    <!--End of Main Wrapper Area-->

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!-- popper JS
		============================================ -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>

    <!-- AJax Mail JS
		============================================ -->
    <script src="js/ajax-mail.js"></script>

    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>

    <!-- StyleSwitch JS
		============================================ -->
    <script src="js/styleswitch.js"></script>

    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#frmBuscarAspirante').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'procesos/add_usuario.php',
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response)
                    var jsonData = JSON.parse(response);
                    console.table(jsonData.op)
                    var no_documento = jsonData.no_documento
                    if (jsonData.op == "4") {
                        location.href = 'pre-inscripcion.php?no_documento=' + no_documento;
                    } else if (jsonData.op == "2") {
                        location.href = 'pre-inscripcion.php?no_documento=' + no_documento;
                    } else {
                        Swal.fire(
                            'Error!',
                            'Lo sentimos, ya tiene una pre-inscripción en proceso, espere respuesta a su correo!',
                            'error'
                        );
                    }
                }
            });
        });
    });
</script>