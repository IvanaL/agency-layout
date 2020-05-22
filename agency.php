<?php
/**
 * Created by PhpStorm.
 * User: xyclonuser
 * Date: 30/12/17
 * Time: 19:10
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridger Conway - Agency</title>

    <!-- Styles -->
    <link href="less/styles.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="css/fonts.css" rel="stylesheet">
    <!-- Swiper Slider -->
    <link href="css/swiper.min.css" rel="stylesheet">
    <!-- Animations -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Modal Video -->
    <link rel="stylesheet" href="css/modal-video.min.css">

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
<div id="agency">
    <header>
        <div class="play-button-content"><div class="play-button modal-vimeo" data-video-id="250463854"></div></div>
        <div class="video-content">
            <div class="layer"></div>
            <iframe src="//player.vimeo.com/video/250463854?autoplay=1&background=1&title=0&byline=0&portrait=0" class="hidden-xs" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <div class="visible-xs" style="background-image: url('images/examples/bg_video.jpg');background-size: cover;height: 480px;background-position: center;"></div>
        </div>
    </header>
    <section class="details">
        <div class="wrapper">
            <h1 class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                We are a unique agency...<br>
                As unique as the brands we work with.
            </h1>
            <div class="img wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s" style="background-image: url('images/examples/agency_img.jpg')"></div>
            <div class="col-content">
                <div class="col col1 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                    <h2>Vision.</h2>
                </div>
                <div class="col col2 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                    <p>
                        We’ve understood each of our clients’ needs for over twenty five years in this business. And<br>
                        ever since, we’ve chosen to be an unconventional agency, and this has allowed us to adapt to<br>
                        market change in order to offer a first-rate service.<br>
                        We have six areas that provide different communication services, and offices in the USA ,<br>
                        Argentina, Colombia and Paraguay.<br>
                        Want to know more about us? Keep on surfing this site or contact us.<br>
                        No doubt, there’s a lot more we can do about your brand.
                    </p>
                </div>
            </div>
            <div class="col-content">
                <div class="col col1 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                    <h2>Capabilities.</h2>
                </div>
                <div class="col col2 wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.5s">
                    <div class="col-content capab">
                        <div class="col">
                            <p>
                                Business Strategy.<br>
                                Integrated marketing.<br>
                                Brand & Communications.<br>
                                Visual Design.<br>
                                Product Design.<br>
                                User Experience Design.<br>
                                Social Media.
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                Research/Data Science.<br>
                                Technology.<br>
                                Photography.<br>
                                Animation/Motion Graphics.<br>
                                Event experience.<br>
                                Copywriting.<br>
                                Digital marketing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="bg">
            <div class="wrapper">
                <h1 class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
                    We keep<br> building up<br> from talented<br> teams.
                </h1>
            </div>
        </div>
        <div class="person wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
            <div class="wrapper">
                <div class="col-content">
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person1.jpg">
                            <div class="caption">
                                <h6>Marcelo Bridger.</h6>
                                <p>Founding Partner, Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person2.jpg">
                            <div class="caption">
                                <h6>Santiago Felippelli Conway.</h6>
                                <p>Founding Partner, Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person1.jpg">
                            <div class="caption">
                                <h6>Daniela Barrero.</h6>
                                <p>Controller</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person2.jpg">
                            <div class="caption">
                                <h6>Daniela Barrero.</h6>
                                <p>Controller</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person1.jpg">
                            <div class="caption">
                                <h6>Daniela Barrero.</h6>
                                <p>Controller</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person2.jpg">
                            <div class="caption">
                                <h6>Daniela Barrero.</h6>
                                <p>Controller</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person1.jpg">
                            <div class="caption">
                                <h6>Daniela Barrero.</h6>
                                <p>Controller</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="thumb">
                            <img src="images/examples/person2.jpg">
                            <div class="caption">
                                <h6>Daniela Barrero.</h6>
                                <p>Controller</p>
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
<script src="js/player.min.js"></script>
<script src="js/modal-video.min.js"></script>
<script src="js/init.js"></script>
<script src="js/agencyvideo.js"></script>
</body>
</html>
