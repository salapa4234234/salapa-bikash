$(document).ready(function () {
    // add UL Default Class
    var listSelector = $('main').find('ul');
    $(listSelector).each(function (e, v) {
        if ($(v).hasClass('') && !$(v).hasClass('default-listing')) {
            $(this).addClass('default-listing');
        }
    });

    // add Table Default Class and table responsive class
    var tableSelector = $('main').find('table');
    $(tableSelector).each(function (e, v) {
        if (!$(v).hasClass('table-default')) {
            $(this).addClass('table-default');
        }
        //Wrap table with .table-responsive class
        if (!$(v).parent().hasClass('table-responsive')) {
            $(v).wrap("<div class='table-responsive'></div>");
        }
    });

    // Start Box Animation hover
    $('.col').mouseenter(function () {
        var that = this;
        $(that).prev().addClass('prev');
        $(that).addClass('hovered');

    });
    $('.col').mouseleave(function () {
        var that = this;
        setTimeout(function () {
            $(that).removeClass('hovered');
        }, 100);
        $(that).prev().removeClass('prev');
    });
});