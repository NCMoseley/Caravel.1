jQuery(document).ready(function ($) {

  $('#fullpage').fullpage({
    css3: true,
    scrollingSpeed: 1100,
    autoScrolling: false,
    navigation: false,
    navigationPosition: 'left',
    loopHorizontal: true,
    keyboardScrolling: true,
    easing: 'easeInOutCubic',
    easingcss3: 'ease',
    controlArrows: true,
    fitToSection: false
  });
});