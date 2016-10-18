var h = require('./helpers');

// Libraries
var Flickity = require('flickity');
var ScrollReveal = require('scrollreveal');
var Headroom = require('headroom.js');
var SmoothScroll = require('smooth-scroll');

// Elements
var body = document.querySelector('body');


//------------------------------------//
// HOMEPAGE
//------------------------------------//

if (body.classList.contains('home')) {

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
}


//------------------------------------//
// GENERAL
//------------------------------------//

// Sticky header
var header = document.querySelector('header');
var headroom  = new Headroom(header, {
  offset: 100,
  tolerance: 5
});
headroom.init();

// Smooth scroll
SmoothScroll.init({
  easing: 'easeInQuart'
});