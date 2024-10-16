jQuery(function ($) {

    // Do stuff here

    // close all open sub menus when element with "close-all-panels" class is clicked

        $('a.close-all-panels').on('click', function(e) {
            e.preventDefault();
            $('.max-mega-menu').data('maxmegamenu').hideAllPanels();
        });







}); // jQuery End



