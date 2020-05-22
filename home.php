<?php
/**
 * Created by PhpStorm.
 * User: ivanam
 * Date: 14/12/17
 * Time: 11:35
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bridger Conway - Home</title>

    <!-- Styles -->
    <link href="less/styles.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="css/fonts.css" rel="stylesheet">
    <!-- Swiper Slider -->
    <link href="css/swiper.min.css" rel="stylesheet">
    <!-- Animations -->
    <link href="css/animate.css" rel="stylesheet">

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
<div id="home">
    <header>
        <div class="slider">
            <div class="swiper-container aheight">
                <div class="swiper-wrapper section-wrapper">
                    <div class="swiper-slide" style="background-image: url('images/examples/home_slider1.jpg');">
                        <div class="wrapper">
                            <h1 class="animated" data-animation="fadeInUp">
                                We are<br> constantly<br> creating
                                value.</h1>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('images/examples/home_slider2.jpg');">
                        <div class="wrapper">
                            <h1 class="animated" data-animation="fadeInUp">New VBI<br>for Bud 66.</h1>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('images/examples/home_slider3.jpg');">
                        <div class="wrapper">
                            <h1 class="animated" data-animation="fadeInUp">Under Armour<br> & Phelps:<br> A joint effort.</h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="arrow hidden-xs"><a href="#agency" class="scrollto"><img src="images/arrow_down.png"></a></div>
        </div>
    </header>
    <section class="agency" id="agency">
        <div class="wrapper">
            <p class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.3s">A branding and communications agency.</p>
            <div class="typercont">
                <h3 class="wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.3s">
                    We offer you a great interdisciplinary team that gets involved
                    in each project with
                    passion and proficiency.
                </h3>
            </div>
        </div>
    </section>
    <section class="content-grid wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
        <div class="wrapper">
            <div class="grid">
                <div class="grid-item item">
                    <div class="grid-item-content grid-item--height2" style="background-image: url('images/examples/img1.jpg');">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Branding & communication.</p>
                        </a>
                    </div>
                </div>
                <div class="grid-item item white">
                    <div class="grid-item-content grid-item--height1">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Define, prove,<br> and scale: a digital<br> transformation toolkit.</p>
                            <div class="view-cases">View ideas</div>
                        </a>
                    </div>
                </div>
                <div class="grid-item item">
                    <div class="grid-item-content grid-item--height2" style="background-image: url('images/examples/img3.jpg');">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Package<br> design.</p>
                        </a>
                    </div>
                </div>
                <div class="grid-item item">
                    <div class="grid-item-content grid-item--height2" style="background-image: url('images/examples/img4.jpg');">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Event<br> production.</p>
                        </a>
                    </div>
                </div>
                <div class="grid-item item">
                    <div class="grid-item-content grid-item--height2" style="background-image: url('images/examples/img3.jpg');">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Social media &<br> interactive.</p>
                        </a>
                    </div>
                </div>
                <div class="grid-item item">
                    <div class="grid-item-content grid-item--height2" style="background-image: url('images/examples/img5.jpg');">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Trade<br> marketing.</p>
                        </a>
                    </div>
                </div>
                <div class="grid-item item">
                    <div class="grid-item-content grid-item--height2" style="background-image: url('images/examples/img6.jpg');">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Video &<br> motiongraphics.</p>
                        </a>
                    </div>
                </div>
                <div class="grid-item item white">
                    <div class="grid-item-content grid-item--height1">
                        <a href="#">
                            <div class="layer"></div>
                            <p>Creating a distinct<br> voice for your brand.</p>
                            <div class="view-cases">View ideas</div>
                        </a>
                    </div>
                </div>
                <div class="grid-item item white">
                    <div class="grid-item-content grid-item--height1">
                        <a href="#">
                            <div class="layer"></div>
                            <p>How people<br> really use voice<br> interfaces.</p>
                            <div class="view-cases">View ideas</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
        <div class="wrapper">
            <p>Subscribe to our newsletter.</p>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Leave us your email" class="form-ctrl">
                    <span class="addon"><img src="images/arrow_right.png"></span>
                </div>
            </form>
        </div>
    </section>
</div>
<?php include('includes/footer.php')?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/preloader.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/masonry.pkgd.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/init.js"></script>
<script src="js/grid.js"></script>
<script src="js/slider.js"></script>
</body>
</html>