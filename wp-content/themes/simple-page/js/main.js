console.log("Hello World");

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