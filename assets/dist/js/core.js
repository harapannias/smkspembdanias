$(function () {
    $('#myTab li:a').tab('show');
});

$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "fade", // slide or fade
        controlsContainer: ".flex-container" // the container that holds the flexslider
    });
});

$(".scroll-to-top").click(function () {
    return $("html, body").animate({scrollTop: 0}, 800), !1;
});
