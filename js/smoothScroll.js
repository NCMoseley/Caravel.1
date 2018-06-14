jQuery(document).ready(function ($) {

  setTimeout(function () {

    var target = $('.header-container').attr('name');
    var scrollTo = $(target).offset().top;
    $('html, body').animate({
        scrollTop: scrollTo
      },
      1500
    );
  }, 7000);

  if ($('body').hasClass('home')) {
    $('a[href*=#]').bind('click', function (e) {
      e.preventDefault();

      var target = $(this).attr('href');
      var scrollTo = $(target).offset().top;

      $('html, body').animate({
          scrollTop: scrollTo
        },
        1500
      );
    });
  }

  function offsetAnchor() {
    if (location.hash.length !== 0) {
      window.scrollTo(window.scrollX, window.scrollY - 140);
    }
  }
  $(window).on('hashchange', offsetAnchor);

  window.setTimeout(offsetAnchor, 1);
});