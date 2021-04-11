'use strict';
jQuery(function($){
  $(document).ready(function() {
    var winW = $(window).width();
    var bp = 561;
    function setLink() {
      $("a[href^='#']").click(function(){  
        var $target = $($(this).attr('href'));
        if ($target) {
          $('body,html').stop().animate({
            scrollTop: $target.offset().top
          });
        }
      });
    }
    function setSideMenu() {
      var $sidenav = $('.js-sidemenu');
      var navH = $sidenav.outerHeight();
      $(document).scroll(function() {
        if(navH < $(window).scrollTop() + $(window).innerHeight()) {
          $sidenav.addClass('is-fixed');
        } else {
          $sidenav.removeClass('is-fixed');
        }
      })
    }
    function init() {
      setLink();
      if (winW >= bp ) {
        setSideMenu();
      }
    }
    init();
  });
})