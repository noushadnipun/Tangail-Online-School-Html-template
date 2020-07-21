// navbar dropedown
$(document).ready(function() {

    $('.navbar .dropdown-item').on('click', function(e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({ "top": -999, "left": -999 });
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function() {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

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