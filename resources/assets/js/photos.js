import $ from 'jquery';

$(document).ready(function() {
    $(".photos__img").click(function(e) {
        e.preventDefault();

        $('.photos__img').removeClass('photos__img--active');

        $(this).addClass('photos__img--active');
    });

    $('.photos__img:first').click();
});
