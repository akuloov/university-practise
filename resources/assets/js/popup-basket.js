import $ from 'jquery';

$('.useful__item--basket').click(function (){
    $(this).toggleClass('useful__item--active');
    $('.useful__img--basket').toggleClass('useful__img--active');
    $('.useful__counter').toggleClass('useful__counter--active');
    $('.popup-basket').toggleClass('popup-basket--active')
});
