emergence.init({container: null,
        throttle: 250,
        reset: true,
        handheld: false,
        elemCushion: 0.15,
        offsetTop: 0,
        offsetRight: 0,
        offsetBottom: 0,
        offsetLeft: 0
});

var lines = document.querySelectorAll('.line');

function isElementInViewport (el) {

    //special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}

var page = document.querySelector('.page');


if(lines.length > 0) {
  Array.from(lines).forEach(function(element, index){
    element.style.width = "100%";
  });
}


page.addEventListener('scroll', function(e) {
  if(e.target.scrollTop > 5) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

var header = document.querySelector(".header_fixed");
var FIXED_HEADER_APPEARS = 200;


var last_known_scroll_position = 0;
var scrolling = false;

var handleScroll = function(evt){
  if (!evt) evt = event;
  if(event.deltaY === -100) {
    console.log(event.deltaY);
    header.classList.remove("hide");
  } else {
    header.classList.add("hide");
  }
};


function doSomething(scroll_pos, evt) {
  // do something with the scroll position
    if (scroll_pos >= FIXED_HEADER_APPEARS) {
      window.addEventListener('DOMMouseScroll', handleScroll,false); // for Firefox
      window.addEventListener('mousewheel', handleScroll,false); // for everyone else
    } else {
      header.classList.add("hide");
      window.removeEventListener('DOMMouseScroll', handleScroll,false); // for Firefox
      window.removeEventListener('mousewheel', handleScroll,false); // for everyone else
    }
}

window.addEventListener('scroll', function(e) {
  last_known_scroll_position = window.scrollY;
  if (!scrolling) {
    window.requestAnimationFrame(function() {
      doSomething(last_known_scroll_position);
      scrolling = false;
    });
  }
  scrolling = true;
});
// document.addEventListener("scroll", function(e) {
//   if (window.scrollY >= FIXED_HEADER_APPEARS) {
//     header.classList.remove("hide");
//   } else {
//     header.classList.add("hide");
//   }
// });
