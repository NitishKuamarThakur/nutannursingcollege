(function($) {
  Drupal.behaviors.ncn = {
      attach: function (context, settings) {
      
      // Slideshow swipe
      $(".slideshow").swipe( {
          //Generic swipe handler for all directions
          swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
            if(direction == 'left'){
              $('.views_slideshow_controls_text_next a') .trigger('click');
              event.stopImmediatePropagation();
            }
            
            if(direction == 'right'){
              $('.views_slideshow_controls_text_previous a') .trigger('click');
              event.stopImmediatePropagation();
            }
            
          },
          //Default is 75px, set to 0 for demo so any distance triggers swipe
          threshold:50
      });

      // Sticky navbar
      $(function(){
        var navbar = $('.navbar');
        
        $(window).scroll(function(){
          if($(window).scrollTop() <= 166){
            navbar.removeClass('navbar-scroll');
          } else {
            navbar.addClass('navbar-scroll');
          }
        });
      });

      // back to top
      //Get the button
      let mybutton = document.getElementById("btn-back-to-top");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
      scrollFunction();
      };

      function scrollFunction() {
      if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
      ) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
      }
      // When the user clicks on the button, scroll to the top of the document
      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      // page loader
      jQuery(document).ready(function() {
        jQuery('#loading').fadeOut(3000);
      });

      // Menu open in small screen
      $(".navbar-toggler").click(function(){
        //do something here
        $("#superfish-main-toggle").click();
      });

    }
  } ;
})(jQuery);

function print_form_student() { 
  var getUrl = window.location;
  var baseUrl = getUrl .protocol + "//" + getUrl.host;
  var divToPrint = document.getElementById('students_details_wrapper');
  var popupWin = window.open('', '');
  popupWin.document.open();
  popupWin.document.write('<html><head><body onload="window.print()" class="student_print_form">' + divToPrint.innerHTML + '</html>');
  popupWin.document.close();
}