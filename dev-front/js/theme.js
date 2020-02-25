import $ from 'jquery';
import 'slick-carousel';
window.$ = window.jQuery = $;

const buildSlider = (x, y) => x.slick(y)

const heroslider = $('.slider')
const paramSlider = {
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true
}

buildSlider(heroslider, paramSlider)