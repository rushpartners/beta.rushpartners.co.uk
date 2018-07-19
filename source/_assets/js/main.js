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
