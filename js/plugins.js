$(window).load(function () {
    'use strict';
    $(".loader-item").delay(700).fadeOut();
    $("#pageloader").delay(1200).fadeOut("slow");
});
$(window).load(function () {
    'use strict';
    $(".fit-vids").fitVids();
});
$('.nav-toggle').hover(function () {
    'use strict';
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(250);
}, function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(250)
});
$('.mini-nav-button').click(function () {
    $(".nav-menu").slideToggle("9000");
});
$('.nav a').click(function () {
    if ($(window).width() < 970) {
        $(".nav-menu").slideToggle("2000")
    }
});
$(window).load(function () {
    'use strict';
    $('.hometexts').flexslider({
        animation: "slide",
        selector: ".slide-text .hometext",
        controlNav: false,
        directionNav: false,
        slideshowSpeed: 4000,
        direction: "vertical",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
$(window).load(function () {
    'use strict';
    $('.hometexts-1').flexslider({
        animation: "fade",
        selector: ".slide-text-1 .hometext-1",
        controlNav: false,
        directionNav: false,
        slideshowSpeed: 5000,
        direction: "horizontal",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
$(window).load(function () {
    'use strict';
    $('.hometexts-5').flexslider({
        animation: "fade",
        selector: ".slide-text-5 .hometext-5",
        controlNav: false,
        directionNav: true,
        slideshowSpeed: 5000,
        direction: "horizontal",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
$(window).load(function () {
    'use strict';
    $('.post .flex').flexslider({
        animation: "fade",
        selector: ".post-slides .post-slide",
        controlNav: false,
        directionNav: true,
        slideshowSpeed: 5000,
        direction: "horizontal",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
$('#slides').superslides({animation: 'fade',});
$(function () {
    'use strict';
    $('.scroll').bind('click', function (event) {
        var $anchor = $(this);
        var headerH = $('#navigation').outerHeight();
        $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"}, 1200, 'easeInOutExpo');
        event.preventDefault();
    });
});
$('body').scrollspy({target: '.nav-menu', offset: 95});
$('[data-toggle="tooltip"]').tooltip();
$(document).ready(function () {
    'use strict';
    var menu = $('#navigation');
    $(window).scroll(function () {
        var y = $(this).scrollTop();
        var z = $('.waypoint').offset().top - 200;
        if (y >= z) {
            menu.removeClass('not-visible-nav').addClass('visible-nav');
        } else {
            menu.removeClass('visible-nav').addClass('not-visible-nav');
        }
    });
});
$(window).load(function () {
    'use strict';
    $('.inner').flexslider({
        animation: "fade",
        selector: ".t-slides .monial",
        controlNav: false,
        directionNav: true,
        slideshowSpeed: 7000,
        direction: "horizontal",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
jQuery(document).ready(function () {
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({theme: "light_square",});
});
(function ($) {
    'use strict';
    $(document).ready(function () {
        $(window).bind('load', function () {
            parallaxInit();
        });
        function parallaxInit() {
            testMobile = isMobile.any();
            if (testMobile == null) {
                $('.image1').parallax("50%", 0.5);
                $('.image2').parallax("50%", 0.5);
                $('.image3').parallax("50%", 0.5);
                $('.image4').parallax("50%", 0.5);
                $('.parallax').parallax("-50%", 0.3);
                $('.parallax1').parallax("50%", 0.5);
                $('.parallax2').parallax("50%", 0.5);
                $('.parallax3').parallax("50%", 0.5);
                $('.parallax4').parallax("50%", 0.5);
                $('.parallax5').parallax("50%", 0.5);
                $('.parallax6').parallax("50%", 0.5);
            }
        }

        parallaxInit();
    });
    var testMobile;
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        }, BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        }, iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        }, Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        }, Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        }, any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
}(jQuery));
function slabTextHeadlines() {
    $(".typographic h1, .typographic h2").slabText({"viewportBreakpoint": 300});
};$(window).load(function () {
    setTimeout(slabTextHeadlines, 1000);
});
$(window).load(function () {
    'use strict';
    var $container = $('.portfolio-items');
    $container.isotope({resizable: false, itemSelector: '.work'});
    var $optionSets = $('#options .option-set'), $optionLinks = $optionSets.find('a');
    $optionLinks.click(function () {
        var $this = $(this);
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        var options = {}, key = $optionSet.attr('data-option-key'), value = $this.attr('data-option-value');
        value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            changeLayoutMode($this, options)
        } else {
            $container.isotope(options);
        }
        return false;
    });
    var loader = $('.item-expander');
    if (typeof loader.html() == 'undefined') {
        $('<div class="item-expander"><div id="item-expander" class="container clearfix relative"><p class="cls-btn"><a class="close">X</a></p><div/></div></div>').css({opacity: 0}).hide().insertAfter('.portfolio');
        loader = $('.item-expander');
    }
    $('.expander').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var url = $(this).attr('href');
        loader.slideUp(function () {
            $.get(url, function (data) {
                var portfolioContainer = $('.portfolio');
                var topPosition = portfolioContainer.offset().top;
                var bottomPosition = topPosition + portfolioContainer.height();
                $('html,body').delay(600).animate({scrollTop: bottomPosition - -10}, 800);
                var container = $('#item-expander>div', loader);
                container.html(data);
                $(".fit-vids").fitVids();
                $('.project').flexslider({
                    animation: "fade",
                    selector: ".project-slides .slide",
                    controlNav: true,
                    directionNav: true,
                    slideshowSpeed: 5000,
                });
                loader.slideDown(function () {
                    if (typeof keepVideoRatio == 'function') {
                        keepVideoRatio('.project-video > iframe');
                    }
                }).delay(1000).animate({opacity: 1}, 200);
            });
        });
    });
    $('.close', loader).on('click', function () {
        loader.delay(300).slideUp(function () {
            var container = $('#item-expander>div', loader);
            container.html('');
            $(this).css({opacity: 0});
        });
        var portfolioContainer = $('.portfolio');
        var topPosition = portfolioContainer.offset().top;
        $('html,body').delay(0).animate({scrollTop: topPosition - 70}, 500);
    });
});
jQuery(document).ready(function ($) {
    'use strict';
    $('.animated').appear(function () {
        var elem = $(this);
        var animation = elem.data('animation');
        if (!elem.hasClass('visible')) {
            var animationDelay = elem.data('animation-delay');
            if (animationDelay) {
                setTimeout(function () {
                    elem.addClass(animation + " visible");
                }, animationDelay);
            } else {
                elem.addClass(animation + " visible");
            }
        }
    });
});
// jQuery(function () {
//     $(".fact-number").appear(function () {
//         $('.fact-number').each(function () {
//             dataperc = $(this).attr('data-perc'), $(this).find('.factor').delay(6000).countTo({
//                 from: 0,
//                 to: dataperc,
//                 speed: 3000,
//                 refreshInterval: 50,
//             });
//         });
//     });
// });
(function ($) {
    $.fn.countTo = function (options) {
        options = $.extend({}, $.fn.countTo.defaults, options || {});
        var loops = Math.ceil(options.speed / options.refreshInterval), increment = (options.to - options.from) / loops;
        return $(this).each(function () {
            var _this = this, loopCount = 0, value = options.from, interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));
                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }
                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;
                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };
    $.fn.countTo.defaults = {
        from: 0,
        to: 100,
        speed: 1000,
        refreshInterval: 100,
        decimals: 0,
        onUpdate: null,
        onComplete: null,
    };
})(jQuery);
jQuery(function () {
    'use strict';
    jQuery(".player").mb_YTPlayer();
});
$(document).ready(function () {
    'use strict';
    $('form#contact-us').submit(function () {
        $('form#contact-us .error').remove();
        var hasError = false;
        $('.requiredField').each(function () {
            if ($.trim($(this).val()) == '') {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<span class="error">Your forgot to enter your ' + labelText + '.</span>');
                $(this).addClass('inputError');
                hasError = true;
            } else if ($(this).hasClass('email')) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test($.trim($(this).val()))) {
                    var labelText = $(this).prev('label').text();
                    $(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid ' + labelText + '.</span>');
                    $(this).addClass('inputError');
                    hasError = true;
                }
            }
        });
        if (!hasError) {
            var formInput = $(this).serialize();
            $.post($(this).attr('action'), formInput, function (data) {
                $('.mail-message').removeClass('not-visible-message').addClass('visible-message');
                return false;
            });
        }
        return false;
    });
});
$(document).ready(function () {
    'use strict';
    $(".google-map-big-button").click(function () {
        $("#map-button").toggleClass("close-map-button", "open-map-button", 1000);
        $("#map-button").toggleClass("open-map-button", "close-map-button", 1000);
        $("#map").toggleClass("close-map", "open-map", 1000);
        $("#map").toggleClass("open-map", "close-map", 1000);
        return false;
    });
    var latlng = new google.maps.LatLng(41.862274, -87.661328);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        scrollwheel: false,
    };
    var map = new google.maps.Map(document.getElementById('google-map'), myOptions);
    var image = 'images/marker.png';
    var myLatlng = new google.maps.LatLng(41.856774, -87.679928);
    var contentString = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h4>' + 'Office 1' + '</h4>' + '<p>' + 'Your description is here.' + '</p>' + '</div>';
    var marker = new google.maps.Marker({position: myLatlng, map: map, title: 'Hello World!', icon: image});
    var infowindow = new google.maps.InfoWindow({content: contentString});
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
    var myLatlngSecond = new google.maps.LatLng(41.863774, -87.639928);
    var contentStringSecond = '<div id="content">' + '<div id="siteNotice">' + '</div>' + '<h4>' + 'Office 2' + '</h4>' + '<p>' + 'Your description is here.' + '</p>' + '</div>';
    var infowindowSecond = new google.maps.InfoWindow({content: contentStringSecond,});
    var markerSecond = new google.maps.Marker({position: myLatlngSecond, map: map, title: 'Hello World!', icon: image});
    google.maps.event.addListener(markerSecond, 'click', function () {
        infowindowSecond.open(map, markerSecond);
    });
});