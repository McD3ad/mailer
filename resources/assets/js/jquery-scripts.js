(function () {
    let message = $('.flash-message');

    if (message) {
        setTimeout(function () {
            message.fadeOut();
        }, 5000);
    }


    $('.editor-aside-entry').mCustomScrollbar({
        axis: "y",
        theme: "light",
        scrollButtons: true,
        mouseWheel: true,
    });

    $('.editor-main-entry').mCustomScrollbar({
        axis: "y",
        theme: "dark"
    })
})(jQuery);