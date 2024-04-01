import domReady from '@roots/sage/client/dom-ready';

// Swiper import
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Font awesome import
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faAnglesRight } from '@fortawesome/free-solid-svg-icons';
import { faCheck } from '@fortawesome/free-solid-svg-icons';

// Font awesome
library.add(faAnglesRight, faCheck);
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
   * Text carousel 
   */
  textCarousels.forEach((carousel, i) => {
    let carouselTexts = carousel.querySelectorAll('.carousel-item');

    // Init
    carouselTexts.forEach((carouselText, i) => {
      carouselTexts[0].classList.add('active');
      carouselTexts[1].classList.add('next');
    });

    // Carousel functionality
    window.setInterval(function(){
      let totalSlides = carouselTexts.length;
      let nextSlide = carousel.querySelector('.next');
      let lastSlide = carouselTexts[totalSlides - 1];

      // If next is first item
      if (nextSlide == carouselTexts[0]) {
        nextSlide.classList.add('active');
        nextSlide.classList.remove('next');

        lastSlide.classList.remove('active');
        nextSlide.nextElementSibling.classList.add('next');

        return;
      }

      // If next is final item
      if (nextSlide == lastSlide) {
        nextSlide.classList.add('active');
        nextSlide.classList.remove('next');

        lastSlide.previousElementSibling.classList.remove('active');
        carouselTexts[0].classList.add('next');
        return;
      }

      nextSlide.classList.add('active');
      nextSlide.classList.remove('next');

      nextSlide.previousElementSibling.classList.remove('active');
      nextSlide.nextElementSibling.classList.add('next');
      
      return;
    }, 2000);
  });
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
  
  if (scrollDistance > 10) {
    return true;
  }
  
  return false;
}

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
