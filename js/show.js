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

var header = document.querySelector(".header")

document.addEventListener("scroll", function(e) {
  if (window.scrollY > 350) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
});
