<?php
/**
 * Created by PhpStorm.
 * User: ivanam
 * Date: 4/1/18
 * Time: 16:05
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridger Conway - Ideas Detail</title>

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
<div id="ideas-detail">
    <section>
        <div class="wrapper">
            <div class="head">
                <h1>
                    Las tendencias más novedosas en el retail.
                </h1>
                <p>No es un secreto: con la tecnología, varían los entornos de comercio. Y en una época en la que -por ejemplo- el 26% de los pedidos de Starbucks se da a través de aplicaciones móviles, es bueno reforzar las estrategias de venta. Compartimos las más importantes.</p>
            </div>
            <div class="body">
                <div class="col-content">
                    <div class="col col1">
                        <div class="avatar"><img src="images/examples/avatar_work_area.png"></div>
                    </div>
                    <div class="col col2 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <p class="name">Damián Rozina</p>
                        <p class="rol">General Creative Director</p>
                        <p class="name cat">Categories</p>
                        <p class="rol">Marketing</p>
                        <div class="social">
                            <p><strong>Share on</strong></p>
                            <ul>
                                <li><a href="#"><img src="images/fb_xs.png"></a></li>
                                <li><a href="#"><img src="images/tw_xs.png"></a></li>
                                <li><a href="#"><img src="images/mail_xs.png"></a></li>
                                <li><a href="#"><img src="images/ln_xs.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col3 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <p class="desc">
                            Una de las tendencias más definitorias es la de no sólo ofrecer productos, sino también experiencias. Esto se puede dar con photo boots, cargadores gratuitos, cursos o cafés gratis dentro de las tiendas. No importa cuál sea el rubro de la compañía: si le añadimos este valor agregado, los consumidores se llevarán mucho más que un bien.
                            <br><br>
                            También es importante incorporar medios de pago evolutivos. Atrás quedaron los días en los que sólo se recibían efectivo o tarjetas: ahora, además, los grandes comercios deberían aprovecharse de sistemas como PayPal, o Apple Play, sobre todo en regiones como Latinoamérica. Un pago más fácil hace que se realicen más compras.
                            <br><br>
                            En Europa, por ejemplo, se puede abonar hasta con una sonrisa, con huellas digitales o escaneando un código QR. ¿Por qué no impementarlo en todo el mundo? Además de ser más intuitivos, son más seguros.
                            <br><br>
                            Ropa conectada a la web. Desde la marca Levi's, que acuñó la ingeniosa idea de una campera que se conecta con los teléfonos celulares con un botón, hasta el bolso que se limpia solo, de Paqsule.
                            <br><br>
                            Las prendas también pueden ser inteligentes: una empresa, por ejemplo, creó el Twitter Dress, que muestra en tiempo real las menciones o retuits que tiene una actividad. Según el Huffington Post, hasta U2 y Katy Perry defendieron este tipo de ropas. ¡Obviamente, los pagos se pueden hacer desde la propia tela!
                            <br><br>
                            Este video lo demuestra:
                        </p>
                        <div class="video-content">
                            <iframe src="//player.vimeo.com/video/213910958" width="640" height="360" frameborder="0"></iframe>
                        </div>
                        <p class="desc">Y a vos, ¿qué otras tendencias te sorprenderon? ¡No dudes en compartirlas con los que hacemos Bridger Conway!</p>
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