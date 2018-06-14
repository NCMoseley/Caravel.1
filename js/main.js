jQuery(document).ready(function ($) {
<<<<<<< HEAD
  
  var homeFlag = document.querySelector('.header-container');
  console.log(homeFlag.visible());


=======

  var homeFlag = document.querySelector('#header-container').id;
  console.log(homeFlag);
>>>>>>> 0ce8fb9ef32d48cf88c002b73c30a3a5c062d594


  if (!!homeFlag && homeFlag) {
    console.log('complete');
    console.log('hello');

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