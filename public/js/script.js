function detectIE() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
        // IE 12 => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    return false;
};


var detectIE = detectIE();
var deviceMobile = device.mobile();
var deviceTablet = device.tablet();
var windowHeight = $(window).height();
var windowWidth = $(window).width();
var scrollTimeout;

if (!deviceMobile && !deviceTablet) {
    new WOW().init();
}

var initStartPage = function () {
    var startBox = $('#startBox');
    var startHeight = 0;

    windowHeight = $(window).height();
    windowWidth = $(window).width();

    if (deviceTablet) {
        startHeight = window.screen.height - 100;
    } else if (deviceMobile) {
        startHeight = window.screen.height - 70;
        startHeight = windowHeight;
    } else {
        startHeight = windowHeight;
    }

    startBox.css({height: startHeight});
    if (!detectIE && !deviceTablet && !deviceMobile) {
        startBox.parallax({imageSrc: 'images/start-bg.jpg?v2', speed: 0.1});
    } else {
        startBox.addClass('startBoxIe');
    }
};

$(function () {
    $(window).resize(function () {
        initStartPage();
    });

    var menuBox = $('#menuBox');
    $(window).scroll(function () {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(function () {
            if ($(window).scrollTop() >= windowHeight - 54) {
                menuBox.addClass('menuBoxUp');
                menuBox.removeClass('menuBoxDown');
            } else {
                if (menuBox.hasClass('menuBoxUp')) {
                    menuBox.addClass('menuBoxDown');
                    menuBox.removeClass('menuBoxUp');
                }
            }
        }, 100);
    }).scroll();

    $('.menuItem').click(function (e) {
        e.preventDefault();
        var box = $(this).data('box');
        $('html, body').animate({
            scrollTop: $("#" + box + 'Box').offset().top
        });
        window.location.hash = box;
    });
       
    $('.js-lazyYT').lazyYT('', {
        loading_text: ''
    });
    
});