(function ($) {
  $(window).resize(function() {
    windowWidth = document.documentElement.clientWidth || document.body.clientWidth;
    if (windowWidth < 739) {
      $('#region-sidebar-first ul.menu').children().addClass('moved-link').appendTo('#region-menu ul.responsive-menus-simple');
    }
    else {
      $('#region-menu ul.responsive-menus-simple .moved-link').removeClass('moved-link').appendTo('#region-sidebar-first ul.menu');
    }
  });
})(jQuery);