jQuery(document).ready(function ($) {

  var homeFlag = document.querySelector('.header-container');
  console.log(homeFlag);


  if (!!homeFlag && homeFlag.visible(true)) {
    console.log('complete');

    setTimeout(function () {
      $('.header-button').addClass('clickMe');
    }, 5000);

  }
  $('.header-button').click(function () {
    console.log('complete');

    // $('.header-container').fadeOut('slow', function () {
    //   $('.fp-tableCell').css({
    //     'display': 'none',
    //     'height': '0px'
    //   });
    //   $('.header-container').css({
    //     'display': 'none',
    //     'height': '0px'
    //   });
    // });
  });



});