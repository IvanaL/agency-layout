<?php
/**
 * Created by PhpStorm.
 * User: xyclonuser
 * Date: 2/1/18
 * Time: 22:10
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridger Conway - Ideas</title>

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
<?php include('includes/header.php')?>
<div id="ideas">
    <header>
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-color: #000000;">
                        <div class="wrapper">
                            <h1 class="animated" data-animation="fadeInUp">
                                ¿Qué es el inbound marketing, y por qué importa?</h1>
                            <p class="animated hidden-xs" data-animation="fadeInUp">Desde hace unos años, una nueva forma de comunicar empezó a tomar relevancia.
                                En qué consiste, y cómo aplicarlo.</p>
                            <p class="by animated hidden-xs" data-animation="fadeInUp">Por Fabrizio Pedrotti</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color: #000000;">
                        <div class="wrapper">
                            <h1 class="animated" data-animation="fadeInUp">
                                A full-service, integrated branding and marketing agency.</h1>
                            <p class="animated hidden-xs" data-animation="fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu lorem magna.</p>
                            <p class="by animated hidden-xs" data-animation="fadeInUp">Por Santiago Felippelli Conway</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color: #000000;">
                        <div class="wrapper">
                            <h1 class="animated" data-animation="fadeInUp">
                                4 countries, 1 project. From Paraguay to the world.</h1>
                            <p class="animated hidden-xs" data-animation="fadeInUp">Proin volutpat efficitur lectus, non ultricies enim feugiat non.</p>
                            <p class="by animated hidden-xs" data-animation="fadeInUp">Por Marcelo Bridger</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <section class="blog">
        <div class="wrapper">
            <div class="filters animated fadeInUp" style="animation-duration: 2s;">
                <div class="button-option visible-xs"><span></span></div>
                <div id="filters" class="button-group">
                    <button class="button is-checked" data-filter="*">All ideas</button>
                    <button class="button" data-filter=".retail">Retail</button>
                    <button class="button" data-filter=".technology">Technology</button>
                    <button class="button" data-filter=".design">Design</button>
                    <button class="button" data-filter=".marketing">Marketing</button>
                </div>
            </div>
            <div class="entries grid">
                <div class="element-item post retail">
                    <div class="col-content">
                        <div class="col col1 hidden-xs">
                            <div class="img">
                                <img src="images/examples/post1.jpg">
                            </div>
                        </div>
                        <div class="col col2">
                            <div class="label">Marketing</div>
                            <a href="#"><h1>5 formas de sacarle partido a las campañas por E-mail.</h1></a>
                            <p>Si tu empresa está buscando la manera correcta de mejorar su email marketing B2B (bound to bound), estas claves son ideales. Son sencillas, pero te asegurarán un lugar en el corazón de tus clientes.</p>
                            <p class="by">Por Fabrizio Pedrotti</p>
                            <div class="view"><a href="#">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="element-item post technology">
                    <div class="col-content">
                        <div class="col col1 hidden-xs">
                            <div class="img">
                                <img src="images/examples/post2.jpg">
                            </div>
                        </div>
                        <div class="col col2">
                            <div class="label">Marketing</div>
                            <a href="#"><h1>Las tendencias más novedosas en el retail.</h1></a>
                            <p>No es un secreto: con la tecnología, varían los entornos de comercio. Y en una época en la que -por ejemplo- el 26% de los pedidos de Starbucks se da a través de aplicaciones móviles, es bueno reforzar las estrategias de venta. Compartimos las más importantes.</p>
                            <p class="by">Por Fabrizio Pedrotti</p>
                            <div class="view"><a href="#">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="element-item post marketing">
                    <div class="col-content">
                        <div class="col col1 hidden-xs">
                            <div class="img">
                                <img src="images/examples/post3.jpg">
                            </div>
                        </div>
                        <div class="col col2">
                            <div class="label">Marketing</div>
                            <a href="#"><h1>¿Cómo combatir la falta de atención de los usuarios?</h1></a>
                            <p>Las estadísticas son claras: un 40% de los usuarios que visitan una página, la abandona si tarda más de 3 segundos en cargar. Sin embargo, Google inventó un método para hacerle frente al problema.</p>
                            <p class="by">Por Fabrizio Pedrotti</p>
                            <div class="view"><a href="#">View</a></div>
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
<script src="js/swiper.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/init.js"></script>
<script src="js/sliderideas.js"></script>
<script src="js/filterideas.js"></script>
</body>
</html>