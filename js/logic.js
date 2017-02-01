var header = document.querySelector(".header_fixed");
var FIXED_HEADER_APPEARS = 200;

var button = document.querySelector('.menu-button');
var overlay = document.querySelector('.overlay');

button.addEventListener('click', function() {
  this.classList.toggle('menu-button--open');
  overlay.classList.toggle('overlay_is--hidden');
}) 

jQuery('.review_slider').slick({
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000
});

// var last_known_scroll_position = 0;
// var scrolling = false;

// var handleScroll = function(evt){
//   if (!evt) evt = event;
//   if(event.deltaY === -100) {
//     header.classList.remove("hide");
//   } else {
//     header.classList.add("hide");
//   }
// };


// function doSomething(scroll_pos) {
//   // do something with the scroll position
//     if (scroll_pos >= FIXED_HEADER_APPEARS) {
//       header.classList.remove("hide");
//     } else {
//       header.classList.add("hide");
//     }
// }

// window.addEventListener('scroll', function(e) {
//   last_known_scroll_position = window.scrollY;
//   if (!scrolling) {
//     window.requestAnimationFrame(function() {
//       doSomething(last_known_scroll_position);
//       scrolling = false;
//     });
//   }
//   scrolling = true;
// });
