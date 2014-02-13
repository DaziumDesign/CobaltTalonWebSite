$(document).ready(function() {
  // -----------------------------------------------------------
  //  Slider
  // -----------------------------------------------------------
  $('#slider')
  .after('<div id="slidenav">')
  .cycle({
    fx: 'fade',
    speed:  1000,
    timeout: 10000,
    startingSlide: 0,
    pager:  '#slidenav'
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

  // -----------------------------------------------------------
  //  Accordian
  // -----------------------------------------------------------
  $('.acc_link').click(function (){
    $(this).closest('.acc_class').children('.acc_text').slideToggle();
    return false;
  });

  // -----------------------------------------------------------
  //  Local Links
  // -----------------------------------------------------------
  $(".local a, .loc").not('.norm').click(function() {
    if ($(this.hash).length > 0) {
      $.scrollTo(this.hash, 1000);
      anchor = this.hash.replace('#','');
      if ($('.' + anchor).length > 0) {
        $('.' + anchor + '.acc_text').delay(1200).slideToggle();
      }
      return false;
    }
  });

  // -----------------------------------------------------------
  // Colorbox
  // -----------------------------------------------------------
  $("[data-popup]").colorbox({});

  // -----------------------------------------------------------
  // Colorbox Video
  // -----------------------------------------------------------
  $("[data-youtube]").colorbox({iframe:true, innerWidth:853, innerHeight:480});

  // -----------------------------------------------------------
  // FAQ dl
  // -----------------------------------------------------------
  $('dl.faq dd').hide();
  $('dl.faq dt').each(function(i) {
    var $el = $(this);
    $el.click(function(e) {
      $el.next().slideToggle();
    });
  });
});
