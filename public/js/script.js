$(document).ready(function () {
    // Change css on different screen resolutions
    function checkBrowserDimentions () {
        var win = $(this);
        if (win.width() <= 767) {
            $('.signup-hero').removeClass('pull-right');
        }
        if (win.width() > 767) {
            $('.signup-hero').addClass('pull-right');
        }

        if (win.width() <= 528) {
            $('.signup-hero').addClass('hidden');
            $('.signup-btn-num2').removeClass('hidden');
        }
        if (win.width() > 528) {
            $('.signup-hero').removeClass('hidden');
            $('.signup-btn-num2').addClass('hidden');
        }
        if (win.width() <= 900) {
            $('.main-footer .footer-logo').addClass('hidden');
            $('.main-footer .list2').removeClass('pull-right');
        }
        if (win.width() > 900) {
            $('.main-footer .footer-logo').removeClass('hidden');
            $('.main-footer .list2').addClass('pull-right');
        }
    }
    checkBrowserDimentions()
    $(window).on('resize', function(){
        checkBrowserDimentions()
    });

    // Remove alert on button click
    $('.close').click(function () {
        $('.flash').addClass('hidden');
    })
})