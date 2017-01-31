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


if(lines.length > 0) {
  Array.from(lines).forEach(function(element, index){
    element.style.width = "100%";
  });
}

var header = document.querySelector(".header_fixed");
var FIXED_HEADER_APPEARS = 200;


var last_known_scroll_position = 0;
var scrolling = false;

var handleScroll = function(evt){
  if (!evt) evt = event;
  if(event.deltaY === -100) {
    header.classList.remove("hide");
  } else {
    header.classList.add("hide");
  }
};


function doSomething(scroll_pos) {
  // do something with the scroll position
    if (scroll_pos >= FIXED_HEADER_APPEARS) {
      header.classList.remove("hide");
    } else {
      header.classList.add("hide");
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

(function(){
  console.info('loaded')
})()
