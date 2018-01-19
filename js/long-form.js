// /**
//  * Created by pchotrani on 17/03/16.
//  */

(function ($) { // this is an immediately invoked Function, to protect variables from being out of the scope.

    var parallaxScroll = function (largeScreen) {
        if (largeScreen) {
            $('.intro-text').css({
                transform: "translate(0px,-" + $(window).scrollTop() / 3 + "px)"
            });
        }
    }

    var manageLinkState = function ($link, $container) {
        $container.find('a').removeClass('is-selected');
        $link.addClass('is-selected');
    }

    var scrollToSection = function ($link) {
        var $target = $($link.attr('href'));

        $('body').animate({
            scrollTop: $target.offset().top
        }, 'slow');
    }

    var fadeNavigationIfFooterShown = function () {
        var footerVisible = $(window).scrollTop() + 600 > $(document).height() - $(window).height();
        var $nav = $('.cd-vertical-nav');
        (footerVisible) ? $nav.addClass('fade') : $nav.removeClass('fade');
    };

    var tnaScrollSpy = function($els){
        var currentScrollPosition = $(window).scrollTop();
        $els.each(function(){
            var sectionPosition = $(this).offset().top;
            if( sectionPosition - 1 < currentScrollPosition ){
                var id = $(this).attr('id');
                var $target = $("[href=#"+id+"]")
                $('.cd-menu').removeClass('is-selected');
                $target.addClass('is-selected');
            }
        })
    }


    var debounce = function(call_back, wait, this_argument) {

        var timer = null;

        return function () {
            for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
                args[_key] = arguments[_key];
            }

            var context = this_argument || this;

            window.clearTimeout(timer);

            timer = window.setTimeout(function () {
                timer = null;
                call_back.apply(context, args);
            }, wait);
        };
    }

    $(window).on('scroll', debounce(function () {
        var $cdSection = $('.cd-section');
        var largeScreen = $(window).width() > 1024;
        parallaxScroll(largeScreen);
        fadeNavigationIfFooterShown();
        tnaScrollSpy($cdSection);
    }, 50));


    $('.top-menu').on('click', 'a', function (e, $container) {
        $link = $(e.currentTarget);
        $container = $('.top-menu');
        manageLinkState($link, $container);
        scrollToSection($link);
    });


    // IIFE
    var init = (function () {
        // Remove style attributes from .wp-caption
        $(".wp-caption").removeAttr("style");
        $("<div class='position-top-right'><span class='sprite icon-new-window'></span></div>").insertBefore(".wp-caption > a > img");
    })();
})
(jQuery)