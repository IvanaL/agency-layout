/**
 * Created by xyclonuser on 29/12/17.
 */
/*Swiper Slider*/
$(document).ready(function(){
    var animEndEv = 'webkitAnimationEnd animationend';

    var swiper = new Swiper('.swiper-container', {
        init: false,
        slideChange: false,
        direction: 'vertical',
        spaceBetween: 30,
        effect: 'fade',
        slidesPerView: 1,
        loop: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        on: {
            init: function(){
                var currentSlide = $(swiper.slides[swiper.activeIndex]);
                var elems = currentSlide.find(".animated");
                elems.each(function() {
                    var $this = $(this);
                    var animationType = $this.data('animation');
                    $this.addClass(animationType, 100).on(animEndEv, function() {
                        $this.removeClass(animationType);
                    });
                });
            },
            slideChange: function(){
                var currentSlide = $(swiper.slides[swiper.activeIndex]);
                var elems = currentSlide.find(".animated");
                elems.each(function() {
                    var $this = $(this);
                    var animationType = $this.data('animation');
                    $this.addClass(animationType, 100).on(animEndEv, function() {
                        $this.removeClass(animationType);
                    });
                });
            }
        }
    });
    swiper.init();

});
