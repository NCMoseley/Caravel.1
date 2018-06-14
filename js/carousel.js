jQuery(document).ready(function ($) {
  var waypoint = new Waypoint({
    element: document.getElementById('Sean'),
    handler: function() {
      this.element.classList.add('slide-in-left');
    }, 
    offset: 200
  })
  var waypoint2 = new Waypoint({
    element: document.getElementById('Nate'),
    handler: function() {
      this.element.classList.add('slide-in-right');
    }, 
    offset: 200
  })
  var waypoint3 = new Waypoint({
    element: document.getElementById('Colin'),
    handler: function() {
      this.element.classList.add('slide-in-left');
    }, 
    offset: 200 
  })
  var waypoint4 = new Waypoint({
    element: document.getElementById('Ilya'),
    handler: function() {
      this.element.classList.add('slide-in-right');
    }, 
    offset: 200
  })



  $('#fullpage').fullpage({
    // anchors:['firstPage', 'secondPage'],
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