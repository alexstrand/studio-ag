import domReady from '@roots/sage/client/dom-ready';

// Swiper import
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// AOS
import AOS from 'aos';

// Typed.js 
import Typed from 'typed.js';

// Parallax
import { jarallax } from "jarallax";
import 'jarallax/dist/jarallax.min.css';

// Accordion
import Accordion from 'accordion-js';
import 'accordion-js/dist/accordion.min.css';

// Font awesome import
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faAnglesRight, faScaleUnbalanced } from '@fortawesome/free-solid-svg-icons';
import { faCheck } from '@fortawesome/free-solid-svg-icons';
import { faQuoteRight } from '@fortawesome/free-solid-svg-icons';
import { faInstagram } from '@fortawesome/free-brands-svg-icons';
import { faLinkedin } from '@fortawesome/free-brands-svg-icons';
import { faSquareFacebook } from '@fortawesome/free-brands-svg-icons';

// Font awesome
library.add(faAnglesRight, faCheck, faQuoteRight, faInstagram, faLinkedin, faSquareFacebook);
dom.watch();

/**
 * Application entrypoint
 */
domReady(async () => {
  
  /**
   * Variables
   */
  const header = document.getElementById('header');
  const hamburgerTrigger = document.getElementById('hamburger-trigger');
  const navigationPrimary = document.querySelector('header .nav-primary');
  const textCarousels = document.querySelectorAll('.text-carousel');
  const parallaxImages = document.querySelectorAll('.jarallax');
  const typedSpans = document.querySelectorAll('.type-js');
  const accordions = document.querySelectorAll('.accordion-container');

  // AOS
  AOS.init({
    once: true,
    duration: 750,
    easing: 'ease-out-cubic',
    disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded',
  }); 
  
  /**
   * Event listeners
   */

  // Hamburger trigger
  hamburgerTrigger.addEventListener('click', () => {
    hamburgerTrigger.classList.toggle('tham-active');
    navigationPrimary.classList.toggle('open');

    navigationPrimary.querySelectorAll('.menu-item').forEach((menuItem, i) => {
      menuItem.classList.toggle('show');
    });
  });

  // Page load
  pageScroll();
  
  // Page scroll
  addEventListener('scroll', (event) => {
    pageScroll();
  });

  /**
   * Simple parallax
   */
  if (parallaxImages.length) {
    parallaxImages.forEach((image, i) => {
      jarallax(image, {
        speed: 0.5,
      });
    });
  }

  /**
   * Accordion-js
   */
  if(accordions.length) {
    accordions.forEach((accordion, i) => {
      var accordionObj = new Accordion(accordion, {
        duration: 200,
      });   
    });
  }

  /**
   * Typed.js
   */
  if (typedSpans.length) {
    typedSpans.forEach((typedSpan, i) => {
    let strings = typedSpan.dataset.words.split(', ');

      new Typed(typedSpan, {
        strings: strings,
        typeSpeed: 90,
        backSpeed: 40,
        startDelay: 1000,
        loop: true,
        showCursor: true,
        cursorChar: '|',
      });
    });
  }
});

/**
 * Header on scroll
 */
function pageScroll() {
  if (pageIsScrolled()) {
    header.classList.add('scrolled');
    return;
  }
  
  header.classList.remove('scrolled');
  return;
}

/**
 * Page scroll detection
 */
function pageIsScrolled() {
  let scrollDistance = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
  
  if (scrollDistance > 115) {
    return true;
  }
  
  return false;
}

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
