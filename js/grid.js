/**
 * Created by xyclonuser on 30/12/17.
 */
$(document).ready(function(){
    /*Grillas*/
    jQuery('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-item',
        percentPosition: true,
        gutter: 20
    });
});