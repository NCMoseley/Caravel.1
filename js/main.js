jQuery(document).ready(function ($) {

  $('body').removeClass('fade-out');

  var nlform = new NLForm(document.getElementById('nl-form'));

  $('#click-for-pong').click(function () {
    $('#pong').toggleClass('pong');
    $('#pong').toggleClass('none');
  });



});