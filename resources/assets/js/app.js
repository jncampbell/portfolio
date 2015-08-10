/**
 * Created by wheresmyspaceship on 8/5/15.
 */
(function(portfolio, $, undefined) {

    /*
     * Toggle the mobile nav menu
     *
     */
    $(function() {

        var site_header   = $(document.getElementById('site-header'));
        var mobile_toggle = $(document.getElementById('mobile-nav-toggle'));
        var mobile_nav    = $(document.getElementById('mobile-nav'));

        //Attach click event to menu toggle element
        mobile_toggle.on('click', function(e) {
            e.preventDefault();
            mobile_nav.slideToggle(500, 'easeOutExpo').appendTo(site_header);
        });

        //Close the menu if browser size increases beyond the mobile breakpoint
        $(window).resize(function() {
            var width = $(window).width();
            if (width > 960 && mobile_nav.is(':visible')) {
                mobile_nav.hide();
            }
        });

    });


}(window.portfolio = window.portfolio || {}, jQuery));