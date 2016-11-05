var h = require('./helpers');

// Libraries
var Flickity = require('flickity');
var ScrollReveal = require('scrollreveal');
var Headroom = require('headroom.js');
var SmoothScroll = require('smooth-scroll');
var ScrollMonitor = require('scrollmonitor');

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

  // Initialize cover video
  coverVid(document.querySelector('.js-covervid'), 1280, 720);

  // Parallax
  var section = document.getElementById('section-what-does-it-do');
  var sectionWatcher = scrollMonitor.create(section);
  var layerBg = document.querySelector('.js-layer-bg');
  var layerText = document.querySelector('.js-layer-text');

  var parallax = function() {
    var depth, i, layer, layers, len, movement, topDistance, translate3d;
    topDistance = this.pageYOffset;
    layers = document.querySelectorAll('[data-type=\'parallax\']');
    for (i = 0, len = layers.length; i < len; i++) {
      layer = layers[i];
      depth = layer.getAttribute('data-depth');
      movement = -(topDistance * depth);
      translate3d = 'translate3d(0, ' + movement + 'px, 0)';
      layer.style['-webkit-transform'] = translate3d;
      layer.style['-moz-transform'] = translate3d;
      layer.style['-ms-transform'] = translate3d;
      layer.style['-o-transform'] = translate3d;
      layer.style.transform = translate3d;
    }

    var vhScrolled = Math.round(window.pageYOffset / window.innerHeight * 100);
    if (vhScrolled > 100) {
      layerText.classList.remove('is-hidden');
    } else {
      layerText.classList.add('is-hidden');
    }

  };

  window.addEventListener('scroll', parallax);

  sectionWatcher.enterViewport(function() {
    layerBg.classList.add('is-absolute');
    layerText.classList.add('is-absolute');
    window.removeEventListener('scroll', parallax);
  });

  sectionWatcher.exitViewport(function() {
    if (sectionWatcher.isBelowViewport) {
      layerBg.classList.remove('is-absolute');
      layerText.classList.remove('is-absolute');
      window.addEventListener('scroll', parallax);
    }
  });
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

if ( window.location.hash ) {
  var anchor = document.querySelector( window.location.hash ); // Get the anchor
  var toggle = document.querySelector( 'a[href*="' + window.location.hash + '"]' ); // Get the toggle (if one exists)
  var options = {}; // Any custom options you want to use would go here
  SmoothScroll.animateScroll( anchor, toggle, options );
}