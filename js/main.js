/* eslint-disable */
jQuery(document).ready(function($) {
  $('body').removeClass('fade-out');

  $('#click-for-pong').click(function() {
    $('#pong').toggleClass('pong');
    $('#pong').toggleClass('none');
  });
  // $('#form-submit').click(function () {
  //   $('#nl-form').toggleClass('none');
  // });

  var nlform = new NLForm(document.getElementById('nl-form'));
});
