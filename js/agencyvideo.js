/**
 * Created by xyclonuser on 30/12/17.
 */
var modal = document.getElementsByClassName('modal-video');
$(document).ready(function() {
    var iframe = document.querySelector('iframe');
    var player = new Vimeo.Player(iframe);

    jQuery(".modal-vimeo").modalVideo({channel:'vimeo'});

    // jQuery(".modal-vimeo").click(function(){
    //     player.pause();
    // });

    // jQuery(".modal-video-close").click(function(){
    //     player.play();
    // });

});