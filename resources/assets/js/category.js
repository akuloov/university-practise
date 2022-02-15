import $ from 'jquery';

$('.burger-menu').mouseenter(function (){
    $('.burger-menu__list').addClass('burger-menu__list--active')
})

$('.burger-menu__list').mouseleave(function (){
    $(this).removeClass('burger-menu__list--active')
})
