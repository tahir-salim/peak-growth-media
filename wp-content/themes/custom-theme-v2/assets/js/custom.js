$(document).ready(function () {
    switchDiv();

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $(".menu-Bar").click(function () {
        $(this).toggleClass("open");
        $(".menuWrap").toggleClass("open");
        $("body").toggleClass("ovr-hiddn");
    });

    // edit popup
    $('.recipe-pop').click(function () {
        $(".popup").fadeIn();
        $(".overlay").fadeIn();

    });

    $(".closePop,.overlay").click(function () {
        $(".popup").fadeOut();
        $(".overlay").fadeOut();
    });
    // edit popup end

    /* Tabbing Function */
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this)
            .siblings()
            .removeClass("active");
        var target = $(this).data("targetit");
        $("." + target)
            .siblings('[class^="box-"]')
            .hide();
        $("." + target).fadeIn();
        $(".tabViewList").slick("setPosition", 0);
    });
    // accordian function
    $('.accordion-list > li > .answer').hide();
    $('.accordion-list > li > .active').show();

    $('.accordion-list > li').click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active").find(".answer").slideUp();
        } else {
            $(".accordion-list > li.active .answer").slideUp();
            $(".accordion-list > li.active").removeClass("active");
            $(this).addClass("active").find(".answer").slideDown();
        }
        return false;
    });
    $(".cases-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        // prevArrow: "<span class='arr-left'><i class='fas fa-angle-left'></i></span>",
        // nextArrow: "<span class='arr-right'><i class='fas fa-angle-right'></i></span>",
        // prevArrow: $('.prev'),
        // nextArrow: $('.next')
        // centerMode: true,
        // variableWidth: true
        // adaptiveHeight: true
        // centerPadding: '60px',
        // autoplay: true,
        // autoplaySpeed: 2000,
        // cssEase: 'linear'
        responsive: [
            {
                breakpoint:825,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //     Slider For
    // $('.slider-for').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     fade: true,
    //     asNavFor: '.slider-nav'
    // });
    // $('.slider-nav').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-for',
    //     dots: false,
    //     focusOnSelect: true
    // });

});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

$(window).on("load", function () {
    var currentUrl = window.location.href.substr(
        window.location.href.lastIndexOf("/") + 1
    );
    $("ul.menu li a").each(function () {
        var hrefVal = $(this).attr("href");
        if (hrefVal == currentUrl) {
            $(this).removeClass("active");
            $(this)
                .closest("li")
                .addClass("active");
            $("ul.menu li.first").removeClass("active");
        }
    });
});

/* RESPONSIVE JS */
if ($(window).width() < 824) { }

function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $(".topAppendTxt").each(function () {
            var getdtd = $(this)
                .find(".cloneDiv")
                .clone(true);
            $(this)
                .find(".cloneDiv")
                .remove();
            $(this).append(getdtd);
        });
    }
}

function goToScroll(e) {
    $("html, body").animate({
        scrollTop: $("." + e).offset().top
    },
        1000
    );
}


$(window).scroll(numberAnimate);
var viewed = false;

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function numberAnimate() {
    if (isScrolledIntoView($(".animate_number")) && !viewed) {
        viewed = true;
        $('.animie_value').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'linear',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
}
//on scroll counter