jQuery(document).ready(function ($) {


  if ($("#homepage-flag").length > 0 && $('.header-container').visible(true)) {
    console.log('complete');
    setTimeout(function () {
      $('.header-container').addClass('clickMe');
    }, 1000);

  }
  $('.clickMe').click(function () {
    $('.header-container').fadeOut('slow', function () {
      $('.header-container').css('display', 'none');
    });
  });


});