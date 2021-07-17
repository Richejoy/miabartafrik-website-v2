// SHOW ON PAGE LOAD
$(window).load(function () {
   // FADE IN OVERLAY
   $("#surveyModalAuto").delay(2000).fadeIn(500);
   // FLY IN MODAL
   $(".surveyModalContainer").delay(2500).css('display', 'block').animate (
      {
         opacity:1,
         top: "50%"
      }, {
         duration:500,
         easing: 'easeOutBack'
   });
   // DISABLE SCROLLING
   setTimeout(function(){
      var current = $(window).scrollTop();
      $(window).scroll(function() {
         $(window).scrollTop(current);
      });
   }, 2000);
   // ALTERNATE DISABLE CODE - NOT AS GOOD
   //$('html').css('overflow-y', 'hidden');
   //}, 2000);
});

// CLOSE ON BUTTON CLICK
$(window).load(function () {
   $("#surveyCloseButton, .surveyButton").click(function(){
      // FADE OUT OVERLAY
      $("#surveyModalAuto").delay(800).fadeOut(500);
      // FLY OUT MODAL
      $(".surveyModalContainer").delay(200).animate (
         {
            top: "-100%"
         }, {
            duration: 500,
            easing: 'easeInBack'
         }
      );
      // ENABLE SCROLLING
      setTimeout(function(){
         $(window).off('scroll');
      },800);
      // OLD ENABLE CODE
      //$('html').css('overflow-y', 'scroll');
      //}, 800);
  });
});

// CLOSE ON ESC PRESS
$(document).on('keyup', function (e) {
   if (e.keyCode === 27) { 
      // FADE OUT OVERLAY
      $("#surveyModalAuto").delay(800).fadeOut(500);
      //FLY OUT MODAL
      $(".surveyModalContainer").delay(200).animate (
         {
            top: "-100%"
         }, {
            duration: 500,
            easing: 'easeInBack'
         }
      );
      // ENABLE SCROLLING
      setTimeout(function(){
         $(window).off('scroll');
      },800);
   }
});