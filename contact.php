<?php
/**
 * Created by PhpStorm.
 * User: ivanam
 * Date: 5/1/18
 * Time: 12:37
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridger Conway - Contact</title>

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
<div id="contact">
    <section>
        <div class="wrapper">
            <div class="head wow animated fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.4s">
                <h1>
                    Get in touch.
                </h1>
                <p>Just click and contact us.<br> We are looking forward to it!</p>
            </div>
            <form id="contact-form" class="wow animated fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.4s">
                <div class="col-content">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" name="name" class="form-ctrl" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-ctrl" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-ctrl" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col">
                        <textarea class="form-ctrl textarea" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="btn-content">
                    <input type="submit" class="btn-form" value="SEND">
                </div>
            </form>
            <div class="our-offices">
                <h1 class="wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.4s">Our Offices</h1>
                <div class="col-content">
                    <div class="col wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <img src="images/examples/contact1.jpg">
                        <div class="caption">
                            <h6>Buenos Aires.</h6>
                            <p>Headquarters<br>
                                Esteban Echeverría 1744. B1604ABR. Buenos Aires, Argentina.<br>
                                T. 5411-4730-0222<br>
                                <a href="mailto:contacto@bridgerconway.com">contacto@bridgerconway.com</a></p>
                            <div class="get-directions"><a href="#">Get directions</a></div>
                        </div>
                    </div>
                    <div class="col wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.4s">
                        <img src="images/examples/contact2.jpg">
                        <div class="caption">
                            <h6>Miami.</h6>
                            <p>Headquarters<br>
                                Esteban Echeverría 1744. B1604ABR. Buenos Aires, Argentina.<br>
                                T. 5411-4730-0222<br>
                                <a href="mailto:miami@bridgerconway.com">miami@bridgerconway.com</a></p>
                            <div class="get-directions"><a href="#">Get directions</a></div>
                        </div>
                    </div>
                    <div class="col wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                        <img src="images/examples/contact3.jpg">
                        <div class="caption">
                            <h6>Asunción.</h6>
                            <p>Headquarters<br>
                                Esteban Echeverría 1744. B1604ABR. Buenos Aires, Argentina.<br>
                                T. 5411-4730-0222<br>
                                <a href="mailto:contacto@bridgerconway.com">contacto@bridgerconway.com</a></p>
                            <div class="get-directions"><a href="#">Get directions</a></div>
                        </div>
                    </div>
                    <div class="col wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
                        <img src="images/examples/contact4.jpg">
                        <div class="caption">
                            <h6>Bogotá.</h6>
                            <p>Headquarters<br>
                                Esteban Echeverría 1744. B1604ABR. Buenos Aires, Argentina.<br>
                                T. 5411-4730-0222<br>
                                <a href="mailto:miami@bridgerconway.com">miami@bridgerconway.com</a></p>
                            <div class="get-directions"><a href="#">Get directions</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social wow animated fadeIn" data-wow-duration="0.6s" data-wow-delay="0.3s">
                <ul>
                    <li><a href="https://www.facebook.com/BridgerConway" target="_blank"><img src="images/fb_b.png"></a></li>
                    <li><a href="https://vimeo.com/user16540649" target="_blank"><img src="images/vimeo_b.png"></a></li>
                    <li><a href="https://www.instagram.com/bridger_conway/" target="_blank"><img src="images/inst_b.png"></a></li>
                    <li><a href="https://www.linkedin.com/company/10045111" target="_blank"><img src="images/ln_b.png"></a></li>
                </ul>
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