!function(n){var e={};function t(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return n[r].call(i.exports,i,i.exports,t),i.l=!0,i.exports}t.m=n,t.c=e,t.d=function(n,e,r){t.o(n,e)||Object.defineProperty(n,e,{configurable:!1,enumerable:!0,get:r})},t.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return t.d(e,"a",e),e},t.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},t.p="/",t(t.s=0)}({0:function(n,e,t){t("A7k7"),n.exports=t("9LOt")},"9LOt":function(n,e){},A7k7:function(n,e,t){"use strict";var r=function(){function n(n,e){for(var t=0;t<e.length;t++){var r=e[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(n,r.key,r)}}return function(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}}();var i=function(){function n(){!function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),this.attachEvents(),this.initDropdown()}return r(n,[{key:"attachEvents",value:function(){window.addEventListener("scroll",this.handleScroll.bind(this))}},{key:"initDropdown",value:function(){var n=document.querySelector("[dropdown]");n.addEventListener("click",function(e){e.preventDefault();var t=n.parentElement.classList.toggle("nav__item--open");n.parentElement.classList.toggle("nav__item--closed",!t)})}},{key:"handleScroll",value:function(){this.setElementsAsInView()}},{key:"setElementsAsInView",value:function(){Array.from(document.querySelectorAll("[class-inview]")).filter(function(n){return!n.classList.contains(n.getAttribute("class-inview"))}).forEach(function(e){n.isInViewport(e)&&e.classList.add("animation-run")})}}],[{key:"isInViewport",value:function(n){var e=n.getBoundingClientRect();return e.y+e.height<=window.innerHeight}}]),n}();n.exports=new i}});