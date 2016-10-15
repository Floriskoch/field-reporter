var Flickity = require('flickity');
var ScrollReveal = require('scrollreveal');

//------------------------------------//
// HOMEPAGE
//------------------------------------//

// Initialize Flickity
// http://flickity.metafizzy.co/
var container = document.querySelector('.js-slider');
var flkty = new Flickity(container, {
  pageDots: false,
  wrapAround: true,
  autoPlay: 5000,
  prevNextButtons: false,
  selectedAttraction: 0.1,
  adaptiveHeight: true,
  friction: 0.8,
  cellSelector: '.js-slider-item'
});

// Initialize ScrollReveal
window.sr = ScrollReveal();
sr.reveal('.section--what-does-it-do img', { viewOffset: { bottom: 100 } });