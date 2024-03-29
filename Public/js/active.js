(function ($) {
    'use strict';

    var $window = $(window);
    var notiData = $('.notifications-data');
    var messageData = $('.message--data');
    var langData = $('.language-data');
    var profileData = $('.profile-data');
    var active = $('.active');

    // :: Countdown Active Code
    if ($.fn.countdown) {
        $('#clock').countdown('2026/11/10', function (event) {
            $(this).html(event.strftime('<div>%D <span>Days</span></div> <div>%H <span>Hours</span></div> <div>%M <span>Minutes</span></div> <div>%S <span>Seconds</span></div>'));
        });
    }

    // :: Countdown - 2 Active Code
    if ($.fn.countdown) {
        $('#clock-2').countdown('2026/11/12', function (event) {
            $(this).html(event.strftime('<div>%D <span>Days</span></div> <div>%H <span>Hours</span></div> <div>%M <span>Minutes</span></div> <div>%S <span>Seconds</span></div>'));
        });
    }

    // :: Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: Popover Active Code
    if ($.fn.popover) {
        $('[data-toggle="popover"]').popover();
    }

    // :: Niceselect Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: FooTable JS Code
    if ($.fn.footable) {
        $('.footable').footable();
    }

    // :: Dropdown Active Code
    if ($.fn.dropdown) {
        $('dropdown-toggle').dropdown();
    }

    // :: PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });
    
    // :: Top Active Code
    $('.top-trigger').on('click', function () {
        $('body').toggleClass('menu-collapsed mobile-menu-active')
    });

    $('.noti--icon').on('click', function () {
        notiData.toggleClass('active');
        messageData.removeClass('active');
        langData.removeClass('active');
        profileData.removeClass('active');
    });

    $('.messag--icon').on('click', function () {
        messageData.toggleClass('active');
        notiData.removeClass('active');
        langData.removeClass('active');
        profileData.removeClass('active');
    });

    $('.language--icon').on('click', function () {
        langData.toggleClass('active');
        messageData.removeClass('active');
        notiData.removeClass('active');
        profileData.removeClass('active');
    });

    $('.user---thumb').on('click', function () {
        profileData.toggleClass('active');
        langData.removeClass('active');
        notiData.removeClass('active');
        messageData.removeClass('active');
    });
    
    // :: Accordian Active Code
    (function () {
        var dd = $('dd');
        dd.filter(':nth-child(n+3)').hide();
        $('dl').on('click', 'dt', function () {
            $(this).next().slideDown(700).siblings('dd').slideUp(700);
        })
    })();

})(jQuery);