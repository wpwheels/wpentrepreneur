// document.addEventListener('DOMContentLoaded', function(){
//    
    
// });
// wow = new WOW(
//     {
//         boxClass: 'wow',
//     }
// )
//  WOW().init();
// console.log('WOW loaded');

wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();