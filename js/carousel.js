// jQuery(document).ready(function ($) {
//   $(".owl-carousel").owlCarousel({
//     number: 1,
//     loop: true,
//     nav: true,
//     lazyload: true,
//     dots: false,
//     items: 1
//   });
// });





jQuery(document).ready(function(){
    
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

window.onscroll = function() {
  console.log("fullpage");

  // var scrollAnim = new Waypoint({
  //     element: document.querySelector('.panel1'),
  //     handler: function() {
  //       animateUp()
  //     },
  //     // offset: 20
  //   })


// function panel1Anim() {
//     if (!scrolled) {
//         var animation = panel1.animate([
//             { transform: 'translateX(0px)',  opacity: 1 }, 
//             { transform: 'translateX(-100vw)', opacity: 0 }, 
//           ], {
//             duration: 1000,
//             easing: 'ease-in-out',
//             iterations: 1, 
//             fill: "forwards"
//           });
//         panel2Anim();

//     }
//     scrolled = true;
// }
// panel1Anim();


// function panel2Anim() {
//     var animation2 = panel2.animate([
//         { transform: 'translateX(50vw)' }, 
//         { transform: 'translateX(0)'}, 
//       ], {
//         duration: 1000,
//         easing: 'ease-in-out',
//         iterations: 1, 
//         fill: "forwards"
//       });
//     //   animation2.onfinish = function() {
//         // panel1.style.display = 'none';
//         // panel2.style.transform = 'translateX(100vw)';
//         // panel2.style.color = 'red';

//     // }
// }


  // $('.modal-logo-wrapper').animate({opacity: 1}, 2000);

  // setTimeout(function () {
  //     $('.modal-logo-wrapper').animate({"margin-bottom": "300px"}, 2000);
  //     $('.modal-logo-wrapper').fadeOut(200);
  //     $('.modal').fadeOut(1600);
  //   }, 2000);



  // setTimeout(function () {
  //     $('.modal').css('display', 'none');
  //   }, 5000);
}
});