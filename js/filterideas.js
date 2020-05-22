$(document).ready(function() {

        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                retail: '.retail',
                technology: '.technology',
                design: '.design',
                marketing: '.marketing',
                category: '[data-category]',
                weight: function( itemElem ) {
                    var weight = $( itemElem ).find('.weight').text();
                    return parseFloat( weight.replace( /[\(\)]/g, '') );
                }
            }
        });

        var filterFns = {
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
            }
        };

        $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });

        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });

});