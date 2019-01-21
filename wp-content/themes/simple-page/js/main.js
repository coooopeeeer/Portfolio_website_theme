// smooth scroll
jQuery(function () {
    jQuery('a[href^="#"]').click(function () {
        var speed = 1000;
        var href = jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery('body, html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});


// header fixed
var _window = $(window),
    _header = $('header'),
    mainBottom;

_window.on('scroll', function () {
    mainBottom = $('#main').height();
    if (_window.scrollTop() > mainBottom) {
        _header.addClass('fix');
    }
    else {
        _header.removeClass('fix');
    }
});

_window.trigger('scroll');