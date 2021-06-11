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
    $(".hero-slider-wrap").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: true,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 800,
        autoplayHoverPause: true,
        navText: [
            "<i class='flaticon-back'></i>",
            "<i class='flaticon-right'></i>",
        ],
    });
    $(".hero-slider-wrap-eight").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 800,
        autoplayHoverPause: true,
        animateOut: "slideOutDown",
        animateIn: "slideInDown",
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
    });
    $(".doctors-wrap").owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        margin: 30,
        center: true,
        dots: false,
        smartSpeed: 1500,
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
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
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });
    $(".client-wrap").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        center: false,
        responsive: {
            0: {
                items: 1,
                margin: 10,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
                margin: 20,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,
            },
        },
    });
    $(".client-wrap-two").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: false,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
    });
    $(".banner-image-slider").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoHeight: true,
        items: 1,
        animateOut: "fadeOut",
        margin: 0,
    });
    $(".about-img-wrap").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoHeight: true,
        items: 1,
        animateOut: "fadeOut",
        margin: 0,
        navText: ["<i class='bx bx-chevron-right'></i>"],
    });
    $(".services-item-wrap").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoHeight: true,
        items: 1,
        animateOut: "fadeOut",
        margin: 0,
    });
    $(".odometer").appear(function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });
    $("#datetimepicker2").datepicker({
        weekStart: 0,
        todayBtn: "linked",
        language: "es",
        orientation: "bottom auto",
        keyboardNavigation: false,
        autoclose: true,
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
    $(".search-btn").on("click", function () {
        $(this).hide();
        $(".search-overlay").fadeIn();
        $(".close-btn").addClass("active");
    });
})(jQuery);
