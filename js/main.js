jQuery(document).ready(function ($) {

  var nlform = new NLForm(document.getElementById('nl-form'));

  $('#click-for-pong').click(function () {
    $('#pong').toggleClass('pong');
    $('#pong').toggleClass('none');
  });

});