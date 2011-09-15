$(document).ready(function() {

  //----------------------------------------------------
  //  Slider
  //----------------------------------------------------
  $('#slider').cycle({
		fx: 'scrollLeft',
    timeout: 5000
	});
  $('.opportunities').before('<div id="pager">').cycle({
		fx: 'scrollUp',
    pager:  '#pager',
    timeout: 0
	});


  //----------------------------------------------------
  //  Accordian
  //----------------------------------------------------
  $('.acc_link').click(function () {
    $(this).closest('.acc_class').children('.acc_text').slideToggle()
      return false;
  })


  //----------------------------------------------------
  //  Local Links
  //----------------------------------------------------
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



  //----------------------------------------------------
  // Popup in colorbox
  //----------------------------------------------------

  $(".popup").colorbox();



});
