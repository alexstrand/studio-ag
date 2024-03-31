import domReady from '@roots/sage/client/dom-ready';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faAnglesRight } from '@fortawesome/free-solid-svg-icons';

// Font awesome
library.add(faAnglesRight);
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
