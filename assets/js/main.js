'use strict';
jQuery(function($){
  $(document).ready(function() {
    console.log('ready')
    var winW = $(window).width();
    var bp = 561;
    var init = function() {
      $("a[href^='#']").click(function(){  
        var $target = $($(this).attr('href'));
        if ($target) {
          $('body,html').stop().animate({
            scrollTop: $target.offset().top
          });
        }
      });
      if (winW >= bp ){
        var $sidenav = $('.js-sidemenu');
        var navH = $sidenav.outerHeight();
        $(document).scroll(function() {
          console.log('navH: '+ navH);
          console.log('scrollTop: '+ $(window).scrollTop());
          console.log('innerHeight: '+ $(window).innerHeight());
          if(navH < $(window).scrollTop() + $(window).innerHeight()) {
            $sidenav.addClass('is-fixed');
          } else {
            $sidenav.removeClass('is-fixed');
          }
        })
      }
    };
    init();
  });
})