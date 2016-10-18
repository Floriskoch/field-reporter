var h = require('./helpers');

// Libraries
var Flickity = require('flickity');
var ScrollReveal = require('scrollreveal');
var Headroom = require('headroom.js');


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

// Header
/*
var header = document.querySelector('header');
window.addEventListener('scroll', h.throttle( function() {
  if (window.scrollY >= 300) {
    header.classList.add('has-scrolled')
  } else {
    header.classList.remove('has-scrolled')
  }
}, 100));*/

// Sticky header
var header = document.querySelector('header');
var headroom  = new Headroom(header, {
  offset: 100,
  tolerance: 5
});



headroom.init();

console.log(headroom);