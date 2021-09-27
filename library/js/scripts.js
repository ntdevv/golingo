jQuery(document).ready(function($) { 
  /* ====================== REMOVE EMPTY P TAG ======================  */
     $('p').each(function() {
         var $this = $(this);
         if ($this.html().replace(/\s|&nbsp;/g, '').length == 0)
             $this.remove();
     });

  /* ====================== FANCYBOX SETTINGS  ======================  */
   // $('[data-fancybox]').fancybox({
   //     buttons: [
   //         "share",
   //         "close",
   //     ],
   //     protect: true,
   //     loop: true,

   // });

 /* ====================== INIT FUNCSTIONS ======================  */
   if ( $('body').hasClass('error404') || $('body').hasClass('login') ) {
     $('.header').addClass('scrolled');
   }

   wow = new WOW(
   {
     boxClass:     'wow',      // default
     animateClass: 'animated', // default
     offset:       0,          // default
     mobile:       true,      
     live:         true        // default
   })
   wow.init();

   /* ====================== WINDOW REISZE FUNCTION  ======================  */
     $(window).resize(function() {
       wowOffsetCheck();
     })

     function wowOffsetCheck() {
       if( $(window).width() >= 768 ) {
         $('.wow').attr('data-wow-offset', 100);
       } else {
         $('.wow').attr('data-wow-offset', 0);
       }
     }

   /* ====================== WINDOW SCROLL FUNCTION  ======================  */
     $(window).on('scroll', function() {
       /*masthead vars*/
       var windowScroll = $(window).scrollTop();
       var windowHeight = $(window).height();
       var winWidth = $(window).width();
       var translate3d = windowScroll / 3;

       if(windowScroll < windowHeight) {
           $(".masthead-image").css('transform', 'translate3d(0px,'+ translate3d +'px, 0px)');
       }

       if( windowScroll > 150) {
         $('.header').addClass('scrolled');
       } else {
         if( !$('body').hasClass('error404') && !$('body').hasClass('login') ) {
           $('.header').removeClass('scrolled');
         }
       }
       
     });

   /* ====================== NAV TOGGLE  ======================  */
     $('.nav-toggle').on('click', function() {
       $('html').toggleClass('nav-open');
       $(".menu-item-has-children").removeClass('open');
       // $(".menu-item-has-children .sub-menu").css('maxHeight', 0);
     })

     $(document).on('click', function(e) {
       e.stopPropagation();
       // console.log(e.target)
       var nav = $('.navigation');
       var navtoggle = $('.nav-toggle');
       if( (!navtoggle.is(e.target) && navtoggle.has(e.target).length == 0) && ( !nav.is(e.target) && nav.has(e.target).length == 0)) {
         $('html').removeClass('nav-open');  
       }
     })

   /* ====================== NAV DROPDOWN TOGGLE  ======================  */

   $(".menu-item-has-children").on("click", function() {
     var winWidth = $(window).width();
       if( winWidth < 1025 ) {
         $(this).toggleClass("open");
         var panel = $(this).children('.sub-menu');

         // if (panel.outerHeight() >= 1 ) {
         //   // console.log('NULL')
         //   panel.css('maxHeight', 0);
         // } else {
         //   panel.css('max-height', (panel[0].scrollHeight + 32)  + "px");
         // }
       } 
   });

  /* ====================== SLICK SETTINGS  ======================  */

    let $testimonialSlider = $('.testimonial-slider');
    // let $status = $('.paging');

    // $testimonialSlider.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    //     //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    //     var i = (currentSlide ? currentSlide : 0) + 1;
    //     $status.text(i + '/' + slick.slideCount);
    // });

   $testimonialSlider.slick({
     infinite: true,
     slidesToShow: 1,
     slidesToScroll: 1,
     dots: false,
     autoplay: true,
     autoplaySpeed: 7000,
     rows: 0,
     prevArrow: $('.prev'),
     nextArrow: $('.next')
   });

/* ====================== CF7 SENDING ======================  */
  let $orgVal = '';
  let $target = null

  $('.wpcf7-submit').on('click', function(e) {
      //Collect original text before changing it
      $orgVal = $(this).val();
      $target = $(this);

      $(this).val('Sending...');
      $(this).addClass('disabled');
  });

  document.addEventListener('wpcf7invalid', function(event) {
      $target.removeClass('disabled');
      $target.val($orgVal);
  }, false);

  document.addEventListener('wpcf7mailsent', function(event) {
      $target.removeClass('disabled');
      $target.val($orgVal);
  }, false);

/* ====================== HASH ANCHOR TAG CLICKS  ======================  */
  $('a').on('click', function() {
   if( $(this).attr('href') === '#') {
     return false;
   }    
  })
});
(function($){
  $('.header__toggle').on('click', function()
  {
      $(this).toggleClass('__open');
      $('section').each(function(){$(this).toggleClass('__open')})
  })
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 50){
          $(".header").addClass("scrolled");
      }else{
          $('.scrolled').removeClass('scrolled');
      } 
  })

})(jQuery)
