/**
 * Created by wheresmyspaceship on 8/5/15.
 */
(function(portfolio, $, undefined) {

    function isTouchDevice() {
        return (('ontouchstart' in window)
            || (navigator.MaxTouchPoints > 0)
            || (navigator.msMaxTouchPoints > 0));
    }

    (function() {
        if (!isTouchDevice()) {
            $('.grow-on-hover').on('mouseenter touchstart', 'li', function(){
                $(this).addClass('hover-effect');
            }).on('mouseout touchend', 'li', function() {
                $(this).removeClass('hover-effect');
            });
        }
    })();

    //Doesn't work in Safari
    $('#contact-form').on('submit', function(e) {
       $('#contact').append('<div class="loader"></div>');
    });


    //Toggle the mobile nav menu
    $(function () {

        var site_header   = $('#site-header');
        var mobile_toggle = $('#mobile-nav-toggle');
        var mobile_nav    = $('#mobile-nav');

        //Attach click event to menu toggle element
        mobile_toggle.on('click touchstart', function (e) {
            e.preventDefault();
            mobile_nav.slideToggle(250);
        });

        //Close the menu if browser size increases beyond the mobile breakpoint
        $(window).resize(function () {
            var width = $(window).width();
            if (width > 960 && mobile_nav.is(':visible')) {
                mobile_nav.hide();
            }
        });
    });

    //Activate the left and right carousel arrows
    $('.carousel-control.left').on('click', function() {
        $('#carousel').carousel('prev');
    });

    $('.carousel-control.right').on('click', function() {
        $('#carousel').carousel('next');
    });


}(window.portfolio = window.portfolio || {}, jQuery));