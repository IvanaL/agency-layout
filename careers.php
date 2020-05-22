<?php
/**
 * Created by PhpStorm.
 * User: ivanam
 * Date: 4/1/18
 * Time: 17:41
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridger Conway - Careers</title>

    <!-- Styles -->
    <link href="less/styles.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="css/fonts.css" rel="stylesheet">
    <!-- Swiper Slider -->
    <link href="css/swiper.min.css" rel="stylesheet">
    <!-- Animations -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<style>
    #preloader {position:fixed;top:0;left:0;right:0;bottom:0;background-color:#000;z-index:999999;}
    #status {width:100%;height:3px;background-image:url('images/loader.gif');}
</style>
<div id="preloader"><div id="status"></div></div>
<div id="nav-b"><?php include('includes/header.php')?></div>
<div id="careers">
    <section>
        <div class="wrapper">
            <div class="head wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.3s">
                <h1>
                    Be one of our team.
                </h1>
                <p>
                    If you want to grow professionally by developing projects for major brands, join BridgerConway. We believe in collaborative work, and effort is as our source of inspiration to achieve best
                    results.<br>
                    Let us know about your skills and expectations, and contact us to become a member of our
                    great work team.</p>
            </div>
            <div class="carrer wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <div class="col-content">
                    <div class="col col1">
                        <img src="images/examples/careers1.jpg" class="img">
                    </div>
                    <div class="col col2">
                        <h1>Diseñador gráfico.</h1>
                        <p>Si tenés ganas de crecer y de trabajar con marcas reconocidas globalmente, ¡te estamos buscando! Es fundamental que cuentes con buen manejo de programas de diseño, retoque y montaje.</p>
                        <p>Descripción del cargo:
                            Desarrollo creativo/conceptual y estético de campañas integrales. Es importante poder pensar en conceptos y estrategias, más allá de la ejecución visual.
                            Importante: experiencia en BTL, para poder generar ideas en trade y puntos de contacto con el consumidor.
                            Muy buena mano y criterio visual, sólidos conocimientos de diseño y retoque fotográfico.
                        </p>
                        <p>Postulate a la búsqueda enviando tu portfolio y remuneración pretendida a: <a href="mailto:calbajari@bridgerconway.com">calbajari@bridgerconway.com</a></p>
                    </div>
                    <div class="col col3">
                        <div class="col-content detail">
                            <div class="col">
                                <h6>Location</h6>
                                <p>Buenos Aires</p>
                            </div>
                            <div class="col">
                                <h6>Area</h6>
                                <p>Branding & communication</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carrer wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                <div class="col-content">
                    <div class="col col1">
                        <img src="images/examples/careers2.jpg" class="img">
                    </div>
                    <div class="col col2">
                        <h1>Ejecutiva de cuentas.</h1>
                        <p>Buscamos Ejecutiva/o de cuentas Senior para nuestro equipo de comunicación. Con al menos 5 años de experiencia en puestos similares. Se requiere muy buen nivel de inglés oral y escrito. </p>
                        <p>Postulate a la búsqueda enviando tu CV y remuneración pretendida a: <a href="mailto:calbajari@bridgerconway.com">calbajari@bridgerconway.com</a></p>
                    </div>
                    <div class="col col3">
                        <div class="col-content detail">
                            <div class="col">
                                <h6>Location</h6>
                                <p>Buenos Aires</p>
                            </div>
                            <div class="col">
                                <h6>Area</h6>
                                <p>Client services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carrer wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <div class="col-content">
                    <div class="col col1">
                        <img src="images/examples/careers3.jpg" class="img">
                    </div>
                    <div class="col col2">
                        <h1>Diseñador industrial.</h1>
                        <p>Buscamos Ejecutiva/o de cuentas Senior para nuestro equipo de comunicación. Con al menos 5 años de experiencia en puestos similares. Se requiere muy buen nivel de inglés oral y escrito.
                        </p>
                        <p>Postulate a la búsqueda enviando tu portfolio y remuneración pretendida a: <a href="mailto:calbajari@bridgerconway.com">calbajari@bridgerconway.com</a></p>
                    </div>
                    <div class="col col3">
                        <div class="col-content detail">
                            <div class="col">
                                <h6>Location</h6>
                                <p>Buenos Aires</p>
                            </div>
                            <div class="col">
                                <h6>Area</h6>
                                <p>Trade marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('includes/footer.php')?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/preloader.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>