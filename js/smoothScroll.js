jQuery(document).ready(function ($) {

  window.addEventListener('scroll', function () {
    console.log(scrollY);
    var width = $(window).width();
    if (width > 1023) {
      $('.sm-links').fadeIn(500);
    }
    if (width < 1023) {
      if (width > 1000) {
        if (window.pageYOffset > 1195) {
          $('.sm-links').fadeOut(500);
        }
        if (window.pageYOffset < 1195) {
          $('.sm-links').fadeIn(500);
        }
      }
      if (width > 700 && width < 1000) {
        if (window.pageYOffset > 1077) {
          $('.sm-links').fadeOut(500);
        }
        if (window.pageYOffset < 1077) {
          $('.sm-links').fadeIn(500);
        }
      }
      if (width > 500 && width < 700) {
        if (window.pageYOffset > 1300) {
          $('.sm-links').fadeOut(500);
        }
        if (window.pageYOffset < 1300) {
          $('.sm-links').fadeIn(500);
        }
      }
      if (width < 500) {
        if (window.pageYOffset > 1500) {
          $('.sm-links').fadeOut(500);
        }
        if (window.pageYOffset < 1500) {
          $('.sm-links').fadeIn(500);
        }
      }
    }
  });

  setTimeout(function () {
    if (window.pageYOffset <= 50) {
      var offset = 0;
      var target = $('.header-container');
      var scrollTo = $(target).offset().top + offset;
      $('html, body').animate({
          scrollTop: scrollTo
        },
        2000
      );
    }
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