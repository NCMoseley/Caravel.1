

jQuery(document).ready(function($){
    
  jQuery('#fullpage').fullpage({
      // anchors:['firstPage', 'secondPage'],
      css3: true,
      scrollingSpeed: 1100,
      autoScrolling: true,
      navigation: true, 
      navigationPosition: 'left',
      loopHorizontal: true,
      keyboardScrolling: true,
      easing: 'easeInOutCubic',
      easingcss3: 'ease',
      controlArrows: true,
  });
});