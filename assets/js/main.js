var h = require('./helpers');

// Libraries
var Flickity = require('flickity');
var ScrollReveal = require('scrollreveal');
var Headroom = require('headroom.js');
var SmoothScroll = require('smooth-scroll');
var ScrollMonitor = require('scrollmonitor');
var imagesLoaded = require('imagesloaded');

// Elements
var body = document.querySelector('body');


//------------------------------------//
// HOMEPAGE
//------------------------------------//

if (body.classList.contains('home')) {

  var intro = document.querySelector('.section--intro');
  imagesLoaded(intro, function() {
    var loader = document.querySelector('.loader');
    loader.classList.add('loader--hidden');

    setTimeout(function() {
      loader.parentNode.removeChild(loader);
    }, 1000);
  });

  // Initialize Flickity
  // http://flickity.metafizzy.co/
  var container = document.querySelector('.js-slider');
  var flkty = new Flickity(container, {
    pageDots: false,
    wrapAround: true,
    autoPlay: 5000,
    //prevNextButtons: false,
    selectedAttraction: 0.1,
    friction: 0.8,
    cellSelector: '.js-slider-item',
    arrowShape: {
      x0: 10,
      x1: 70, y1: 50,
      x2: 70, y2: 20,
      x3: 70
    }
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
    var layers = document.querySelectorAll('[data-type=\'parallax\']');
    var len = layers.length; // cache length
    var layerArray = []; //create cache for depth attributes

    var i = -1;
    while(++i < len){
      layerArray.push([layers[i], parseFloat(layers[i].getAttribute('data-depth'))]); //create an array that stores each element alongside its depth attribute instead of requesting that attribute every time
    }

    var parallax = function() {
      var scrollPos = window.pageYOffset; //define inside function instead of globally
      var i = -1;

      while(++i < len) { //while loop with cached length for minor speed gains
        var layer = layerArray[i][0];
        var depth = layerArray[i][1];
        var movement = (scrollPos * depth) * -1;
        var translate3d = ['translate3d(0, ', movement, 'px, 0)'].join(""); //join statement is much faster than string concatenation

        layer.style['-webkit-transform'] = translate3d;
        layer.style.transform = translate3d;
      }

      // Animate text layers
      var vhScrolled = Math.round(scrollPos / window.innerHeight * 100);
      if (vhScrolled > 100 && layerText.classList.contains('is-hidden')) {
        layerText.classList.remove('is-hidden');
      } else if (vhScrolled <= 100 && !layerText.classList.contains('is-hidden')) {
        layerText.classList.add('is-hidden');
      }
    };

    window.requestAnimationFrame(parallax);

    window.addEventListener('scroll', function() {
      // Parallax layers
      window.requestAnimationFrame(parallax);
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
    };

    // CTA input button
    var ctaInput = document.querySelector('.js-input-cta input');
    var ctaButton = document.querySelector('.js-input-cta button');

    ctaInput.addEventListener('keyup', function(event) {
      if (event.target.value.length > 4) {
        ctaButton.disabled = false;
      } else {
        ctaButton.disabled = true;
      }
    });
  }
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