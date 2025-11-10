(function($) {
  $(function() {
    const $header = $("#site-header");
    const headerHeight = $header.outerHeight();

    $(window).on("scroll", function() {
      const scrollPos = $(this).scrollTop();

      if (scrollPos > headerHeight) {
        $header.addClass("fixed");
      } else {
        $header.removeClass("fixed");
      }
    });
  });
})(jQuery);
