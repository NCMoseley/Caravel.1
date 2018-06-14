jQuery(document).ready(function ($) {
  var homeFlag = document.querySelector('.header-container');
  console.log(!!homeFlag);

  

  if ($("#homepage-flag").length > 0 && $('.header-container').visible(true)) {
    console.log('complete');
    console.log('hello');
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