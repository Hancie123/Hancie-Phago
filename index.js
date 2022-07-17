$(document).ready(function() {
    $('#bar-animation').click(function() {
        $(this).toggleClass('active-bar');
        $('.menu-wrapper').toggleClass('fullMenushow');
        $('.menu').toggleClass('startComeWithDelay');
    });
    $('li').click(function() {
        $('.menu-wrapper').removeClass('fullMenushow');
        $('.menu').toggleClass('startComeWithDelay');
        $('#bar-animation').toggleClass('active-bar');
    });
    $('.arrow-top').on('click', function() {
        $('html,body').animate({
            scrollTop: 0
        }, 200);
    });
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('header').addClass('shrinkHeader');
        } else {
            $('header').removeClass('shrinkHeader');
        }
    });
});