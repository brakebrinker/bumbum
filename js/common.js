jQuery(document).ready(function() {
    //On slick slider
    $('.product-slider').slick({
        dots: true,
    });

    //On main slick slider
    $('.products__item__slider').slick({
        dots: true,
    });

    //On tabs
    $('#product-tab-container').easytabs();

    //masonry
    // $('.masonry').masonry({
    //     itemSelector: '.products__item',
    //     columnWidth: 270
    //   });

    //toggle aside catalog
    var showing = false;

    $('.catalog-aside .aside-title').on('click', function() {
        var aside = $('.catalog-aside');
        if (!showing) {
            aside.animate({width: "270px"}, 300, function() {
                $(this).toggleClass('show');
            });
        } else {
            aside.toggleClass('show');
            aside.animate({width: "56px"}, 300, function() {
                
            });
        }

        showing = !showing;
    });
});
