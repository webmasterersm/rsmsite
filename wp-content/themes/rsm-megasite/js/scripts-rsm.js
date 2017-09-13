(function($){
    
    $('#slides').superslides()
    
})(jQuery);

(function($){
    
    $('.icon-menu').click(function(){
        if( $('.icon-menu span').attr('class') == 'fa fa-bars' ){
            $('.icon-menu span').removeClass('fa fa-bars').addClass('fa fa-close');
            $('.mobile-menu').css({'left':'0%'});
        } else {
            $('.icon-menu span').removeClass('fa fa-close').addClass('fa fa-bars');
            $('.mobile-menu').css({'left':'-100%'});
        }
    });
    
})(jQuery);

//Viewport Checker Animation
(function($){
    
    $('.about-img').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInLeft',
        offset: 100
    });
    
})(jQuery);

(function($){
    
    var menu_ul = $('.mobile-menu #primary-menu > li > ul'),
        menu_a  = $('.mobile-menu #primary-menu li > a');
    
    menu_ul.hide();

    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
        }
    });
    
})(jQuery);

(function() {

  'use strict';

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

})(jQuery);







