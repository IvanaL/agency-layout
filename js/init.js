jQuery(document).ready(function() {

    /*Init*/
    adjustSizeBg();
    menu();
    new WOW().init();
    collapse();

    jQuery(window).resize(function() {
        adjustSizeBg();
    });

    /*Menu*/
    function menu(){
        jQuery('#menu-toggle').click(function () {
            jQuery(this).toggleClass('open');
            jQuery('.logo').toggleClass('open');
            jQuery('.menu-nav').toggleClass('open');
        });
    }

    /*Scroll*/
    jQuery(function () {
        jQuery('.scrollto').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    /*Ajusta Bg*/
    function adjustSizeBg(){
        var windowWidth = jQuery(window).width();
        var windowHeight = jQuery(window).height();
        if (windowWidth>1023){
            jQuery('.aheight').css({
                "height": windowHeight
            });
        }else if (windowWidth>600 && windowWidth<=1023){
            jQuery('.aheight').css({
                "height": "528px"
            });
        }else if (windowWidth<=600){
            jQuery('.aheight').css({
                "height": "480px"
            });
        }
    }

    /*Collapse from Footer*/
    function collapse(){
        jQuery('.collapse').click(function (e) {
            e.preventDefault();
            var $this = jQuery(this).attr('href');
            jQuery($this).slideToggle('slow');
        });
    }

    /*View More*/
    jQuery('#view-more a').on("click", function (e){
        e.preventDefault();
        if (jQuery("#desc-work .desc").css('max-height') == '120px') {
            jQuery("#desc-work .desc").animate({"max-height": "999px"});
            jQuery('#view-more a').html('View less');
        }
        else if (jQuery("#desc-work .desc").css('max-height') == '999px') {
            jQuery("#desc-work .desc").animate({"max-height": "120px"});
            jQuery('#view-more a').html('View more');
        }
    });

    /*Select Filter from Ideas*/
    var $txtpt = jQuery('.button-group button:first-child').text();
    jQuery('.button-option span').text($txtpt);

    jQuery('.button-option').click(function(){
        jQuery('.button-group').slideToggle();
        jQuery('.button-group').toggleClass('opened');
    });

    jQuery('.filters').on('click', '.opened>button', function(){
        var $txt = jQuery(this).text();
        jQuery('.button-option span').text($txt);
        jQuery('.button-group').slideUp();
        jQuery('.button-group.opened').removeClass('opened');
    });


});