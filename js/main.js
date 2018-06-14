jQuery(document).ready(function ($) {

  var homeFlag = document.querySelector('#header-container').id;
  console.log(homeFlag);


  if (!!homeFlag && homeFlag) {
    console.log('complete');

    setTimeout(function () {
      $('#header-container').addClass('clickMe');
    }, 1000);

  }
  $('.clickMe').click(function () {
    $('.header-container').fadeOut('slow', function () {
      $('.header-container').css('display', 'none');
    });
  });



});