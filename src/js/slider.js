import $ from 'jquery';
import 'slick-carousel'

$(document).ready(function(){
    $('.main__slider').slick({
        dots:false,
        arrows: false,
        infinite: true, 
        autoplay: true,
        autoplaySpeed: 5000,
    });
});
$(document).ready(function(){
    $('.review__slider').slick({
        dots:false,
        infinite: true, 
        prevArrow: '<button type="button" class="slick-prev"><img src="icons/slider/arrows/left.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="icons/slider/arrows/right.svg"></button>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 5000,
                }
            }
        ]
    });
});