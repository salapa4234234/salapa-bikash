$('.accordion-toggle').click(function () {
    $('.accordion').removeClass('open');
    $(this).parents('.accordion').addClass('open');
})