

jQuery(document).ready(function($){
    
  $('#fullpage').fullpage({
      // anchors:['firstPage', 'secondPage'],
      css3: true,
      scrollingSpeed: 1100,
      autoScrolling: false,
      navigation: true, 
      navigationPosition: 'left',
      loopHorizontal: true,
      keyboardScrolling: true,
      easing: 'easeInOutCubic',
      easingcss3: 'ease',
      controlArrows: true,
      fitToSection: false,
  });
});