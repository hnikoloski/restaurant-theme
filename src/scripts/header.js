jQuery(document).ready(function ($) {
    $("#page").css("padding-top", $("#masthead").outerHeight());
    $("#hero-wrapper").css("margin-top", $("#masthead").outerHeight() * -1);
    $(window).scroll(function () {
        var sticky = $("#masthead .top-bar"),
            scroll = $(window).scrollTop();

        if (scroll >= 100) {
            sticky.slideUp();
            if ($(window).width() > 768) {
                $("#to-top").slideDown();
            }
            $("#masthead").addClass("sticky");
        } else {
            sticky.slideDown();
            if ($(window).width() > 768) {
                $("#to-top").slideUp();
            }
            $("#masthead").removeClass("sticky");
        }
    });
    $('.menu-trigger').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
    })
});
