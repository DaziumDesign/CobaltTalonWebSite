$(document).ready(function() {
  //  SLIDER
  $('#slider')
  .after('<div id="nav">')
  .cycle({
    fx: 'fade',
    speed:  1000,
    timeout: 10000,
    startingSlide: 0
  });

$('#goto1').click(function() {
  $('#slider').cycle(0);
  return false;
});
$('#goto2').click(function() {
  $('#slider').cycle(1);
  return false;
});
$('#goto3').click(function() {
  $('#slider').cycle(2);
  return false;
});

  //  ACCORDIAN
  $('.acc_link').click(function (){
    $(this).closest('.acc_class').children('.acc_text').slideToggle()
    return false;
  })

  //  LOCAL LINKS
  $(".local a, .loc").not('.norm').click(function(){
    if ($(this.hash).length > 0) {
      $.scrollTo(this.hash, 1000);
      anchor = this.hash.replace('#','')
      if($('.' + anchor).length > 0) {
        $('.' + anchor + ' .acc_text').delay(1200).slideToggle()
      }
      return false;
    };
  });

// COLORBOX
$("[data-popup]").colorbox({});
// COLORBOX VIDEO
$("[data-youtube]").colorbox({iframe:true, innerWidth:843, innerHeight:505});

  // ToTop
  var defaults = {
    containerID: 'moccaUItoTop', // fading element id
    containerHoverClass: 'moccaUIhover', // fading element hover class
    scrollSpeed: 1200,
    easingType: 'linear'
  };
  $().UItoTop({ easingType: 'easeOutQuart' });
});
