'use strict';

class Main {
  constructor() {
    this.attachEvents();
    this.initDropdown();
  }

  attachEvents() {
    window.addEventListener('scroll', this.handleScroll.bind(this));
  }

  initDropdown() {
    const elem = document.querySelector('[dropdown]');
    elem.addEventListener('click', (e) => {
      e.preventDefault();
      const isOpen = elem.parentElement.classList.toggle('nav__item--open');
      elem.parentElement.classList.toggle('nav__item--closed', !isOpen);
    });
  }

  handleScroll() {
    this.setElementsAsInView();
  }

  setElementsAsInView() {
    Array.from(document.querySelectorAll('[class-inview]'))
      .filter(e => !e.classList.contains(e.getAttribute('class-inview')))
      .forEach(elem => {
        if (Main.isInViewport(elem)) {
          elem.classList.add('animation-run');
        }
      });
  }

  static isInViewport(element) {
    const rect = element.getBoundingClientRect();

    return (rect.y + rect.height) <= window.innerHeight;
  }
}

module.exports = new Main();

// Animate burger
var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  forEach(hamburgers, function(hamburger) {
    hamburger.addEventListener("click", function() {
      this.classList.toggle("is-active");
    }, false);
  });
};

// Add class to parent navigation div
  $(".hamburger").click(function (e) {
          if($(".nav").hasClass("nav--active")) {
     console.log("hereee")
          $(".nav").removeClass("nav--active")
        } else {
         $(".nav").addClass("nav--active")
        }
   });

   
