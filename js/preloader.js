//preloader
jQuery(window).bind("load", function () {
    jQuery("#status").delay(1400).fadeOut();
    jQuery("#preloader").delay(1400).fadeOut("slow");
});