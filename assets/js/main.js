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

  // Run if not mobile
  if (window.innerWidth >= 1024) {
    // Initialize cover video
    coverVid(document.querySelector('.js-covervid'), 1280, 720);

    // Parallax
    var layerBg = document.querySelector('.js-layer-bg');
    var layerText = document.querySelector('.js-layer-text');
    var sectionIntro = document.getElementById('section-intro');
    var scrollPos = window.pageYOffset;
    var layers = document.querySelectorAll('[data-type=\'parallax\']');

    var parallax = function() {
      for (var i = 0, len = layers.length; i < len; i++) {
        var layer = layers[i];
        var depth = layer.getAttribute('data-depth');
        var movement = (scrollPos * depth) * -1;
        var translate3d = 'translate3d(0, ' + movement + 'px, 0)';

        layer.style['-webkit-transform'] = translate3d;
        layer.style.transform = translate3d;
      }
    };

    window.requestAnimationFrame(parallax);

    window.addEventListener('scroll', function() {
      scrollPos = window.pageYOffset;
      window.requestAnimationFrame(parallax);

      var vhScrolled = Math.round(window.pageYOffset / window.innerHeight * 100);
      if (vhScrolled > 100 && layerText.classList.contains('is-hidden')) {
        layerText.classList.remove('is-hidden');
      } else if (vhScrolled <= 100 && !layerText.classList.contains('is-hidden')) {
        layerText.classList.add('is-hidden');
      }
    });

    var section = document.getElementById('section-what-does-it-do');
    var sectionWatcher = scrollMonitor.create(section);

    sectionWatcher.enterViewport(function() {
      layerBg.classList.add('is-absolute');
      layerText.classList.add('is-absolute');
      sectionIntro.classList.add('is-away');
      window.removeEventListener('scroll', parallax);
    });

    sectionWatcher.exitViewport(function() {
      if (sectionWatcher.isBelowViewport) {
        layerBg.classList.remove('is-absolute');
        layerText.classList.remove('is-absolute');
        sectionIntro.classList.remove('is-away');
        window.addEventListener('scroll', parallax);
      }
    });

    // Force scroll to top on reload
    window.onbeforeunload = function () {
      window.scrollTo(0, 0);
    }
  }
}


//------------------------------------//
// GENERAL
//------------------------------------//

/*// Sticky header
var header = document.querySelector('header');
var headroom  = new Headroom(header, {
  offset: 100,
  tolerance: 5
});
headroom.init();*/

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