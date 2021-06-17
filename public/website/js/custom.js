(function ($) {
    "use strict";
    jQuery(".mean-menu").meanmenu({
        meanScreenWidth: "991",
    });
    $(function () {
        $("body").addClass("loaded");
    });
    $("select").niceSelect();
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 150) {
            $(".navbar-area").addClass("is-sticky");
        } else {
            $(".navbar-area").removeClass("is-sticky");
        }
    });
    $(".work-wrap").owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        margin: 30,
        center: true,
        dots: true,
        smartSpeed: 1500,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 5,
            },
            1500: {
                items: 6,
            },
        },
    });
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $(".go-top").addClass("active");
        if (scrolled < 300) $(".go-top").removeClass("active");
    });
    $(".go-top").on("click", function () {
        $("html, body").animate(
            {
                scrollTop: "0",
            },
            500
        );
    });
    if ($(window).width() <= 990) {
        $('.top-header-area').hide();
    };
    $(".accordion")
        .find(".accordion-title")
        .on("click", function () {
            $(this).toggleClass("active");
            $(this).next().slideToggle("fast");
            $(".accordion-content").not($(this).next()).slideUp("fast");
            $(".accordion-title").not($(this)).removeClass("active");
        });
    
    $(".close-btn").on("click", function () {
        $(".search-overlay").fadeOut();
        $(".search-btn").show();
        $(".close-btn").removeClass("active");
    });
})(jQuery);
