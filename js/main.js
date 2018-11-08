/* eslint-disable */
jQuery(document).ready(function($) {
  $('body').removeClass('fade-out');

  $('#click-for-pong').click(function() {
    $('#pong').toggleClass('pong');
    $('#pong').toggleClass('none');
  });
  // Carousel logic
  $('.responsive').slick({
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.responsive'
  });
  $('#click-for-resume').click(function() {
    $('iframe').toggleClass('resume-visible');
    $('iframe').toggleClass('none');
  });

  var nlform = new NLForm(document.getElementById('nl-form'));
});
