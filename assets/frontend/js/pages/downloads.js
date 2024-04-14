// Mix It
var containerEl = document.querySelector('.shuffle-it');

var mixer = mixitup(containerEl);

var activeTabtext = $('.mixitup-control-active').text();
$('.dropdown-toggler').text(activeTabtext);
$('.dropdown-toggler').click(function () {
    $(this).next().toggleClass('open');
})

$('.filter-control button').click(function () {
    activeTabtext = $(this).text();
    $('.dropdown-toggler').text(activeTabtext);
    $(this).parent().removeClass('open');
})
