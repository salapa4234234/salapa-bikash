$(".vacancy-wrap").mCustomScrollbar({
    theme: "dark",
    scrollbarPosition: 'inside'
});


$('.btn-view-job-desc').click(function(){
    $('.job-lists').removeClass('open');
    $(this).parent().toggleClass('open');
});