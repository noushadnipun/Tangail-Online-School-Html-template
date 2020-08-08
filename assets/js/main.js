// navbar dropedown
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });
    return false;
});


/*==============================
Navbar hover dropdown
===============================*/
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";
 
$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});


/*==================================
Photo Gallery
====================================*/

$(document).ready(function() {
 
  var owl = $("#photo-gallery");
 
  owl.owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 7, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter | for play autoply by button use div class="play"
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop'); // for stop autoply by button use div class="stop"
  })
 
});

/* 
===============================
Video gallery slider  side show
===============================
*/

var button = document.getElementById('slideNext');
button.onclick = function() {
    var container = document.getElementById('video_slider_thumb_container');
    sideScroll(container, 'right', 25, 100, 10);
};

var back = document.getElementById('slideBack');
back.onclick = function() {
    var container = document.getElementById('video_slider_thumb_container');
    sideScroll(container, 'left', 25, 100, 10);
};

function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setInterval(function() {
        if (direction == 'left') {
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if (scrollAmount >= distance) {
            window.clearInterval(slideTimer);
        }
    }, speed);
}