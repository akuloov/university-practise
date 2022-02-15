import $ from 'jquery';

$('.condition__top-block').click(function (){
    $(this).next().toggleClass('condition__content--active')
})

$('.condition__content').click(function (){
    $(this).removeClass('condition__content--active')
})
