
(function ($, Drupal) {
  Drupal.behaviors.ssBackToTop = {
    attach: function(context, settings) {

      $(window, context).on('load', function() {
        $("html", context).once('ssBackToTop').addClass('ss-back-to-top-elem');
      });

      let duration = $(".js-ss-back-to-top", context).once('ssBackToTop').attr('data-scrollduration');

      $(window, context).on('scroll', function() {
        const scrolled = $(window).scrollTop();

        if ( scrolled > duration ) {
          $(".js-ss-back-to-top", context).addClass('visible');
        } else {
          $(".js-ss-back-to-top", context).removeClass('visible');
        }
      });

      function scrollToTop(e) {
        e.preventDefault();
        $("html, body").animate({
          scrollTop: $(".ss-back-to-top-elem").offset().top
        }, 200);
      }
      $(".js-ss-back-to-top", context).on('click', scrollToTop);
    }
  };
}(jQuery, Drupal));
