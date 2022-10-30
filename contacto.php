<!doctype html>
<html class="" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CONTACTO || IED JERUSALEN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!--Estilos Start-->
    <?php include("head.php") ?>
    <!--End of Estilos-->
</head>

<body>

    <!--Header Start-->
    <?php include("header.php") ?>
    <!--End of Header-->

    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h1 class="text-center">CONTÁCTENOS</h1>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center">
                                <li><a href="index.php">INICIO</a></li>
                                <li>CONTÁCTENOS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Google Map Area Start-->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
            <div id="" style="width:100%;height:485px;filter: grayscale(100%);-webkit-filter: grayscale(100%);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15694.124912271329!2d-74.881168!3d10.4587234!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd47ff5a38c3ea6c0!2sColegio%20Jerusal%C3%A9n%20de%20Candelaria!5e0!3m2!1ses-419!2sco!4v1667529008813!5m2!1ses-419!2sco" width="100%" height="485px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--End of Google Map Area-->
    <!--Contact Form Area Start-->
    <div class="contact-form-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h4 class="contact-title">DATOS DE CONTACTO</h4>
                    <div class="contact-text">
                        <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">+88 018 785 454 589</span></p>
                        <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">info@example.com</span></p>
                        <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">House 09, Road 32, Mohammadpur,<br>
                                Dhaka-1200, UK</span></p>
                    </div>
                    <h4 class="contact-title">REDES SOCIALES</h4>
                    <div class="link-social">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <h4 class="contact-title">Envia tu mensaje</h4>
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="txtNombres" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="txtEmail" placeholder="Ingresa tu correo electronico">
                            </div>
                            <div class="col-md-12">
                                <textarea name="txtMensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                <button type="submit" class="button-default">Enviar</button>
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


    <?php include("footer.php") ?>


    <!-- Script js -->
    <?php include("script.php") ?>

</body>

</html>