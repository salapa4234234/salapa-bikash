var windowWidth = $(window).width();
// Mix It
var default_data = $('.shuffle-it').data('default');
default_data = default_data=='all'?'all':'.'+default_data;
var containerEl = document.querySelector('.shuffle-it');
var mixer = mixitup(containerEl);
mixer.filter(default_data);

if (windowWidth < 1024) {
    $(document).ready(function () {
        var activeTabtext = $('.mixitup-control-active').text();
        $('.dropdown-toggler').text(activeTabtext);
        $('.dropdown-toggler').click(function () {
            $(this).next().toggleClass('open');
        })

        $('.filter-control button').click(function () {
            activeTabtext = $(this).text();
            $('.dropdown-toggler').text(activeTabtext);
            $(this).parent().removeClass('open');
        });
    });
}