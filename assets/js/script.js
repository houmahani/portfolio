(function($) {
	
  $(window).on('resize scroll', function() {
    
		// Effet fade in au scroll
    $('article:not(.visible)');
		
		$('article').each(function() {
			if ($(this).position().top < $(window).scrollTop()) {
				$(this).addClass('visible');
			}
		}); 
		
		// Nav text color changes to black when scroll past header (only in pages)
    var headerPage = $('#header_page');
    
		if ($(window).scrollTop() > headerPage.height() ) {
			$('#header_page .to_frontpage, .to_projects').css('color', '#242423');
      // Apparition de la flèche pour remonter en haut de la page
		} else {
			$('#header_page .to_frontpage, .to_projects').css('color', '#fff');
		}
    
    // Scroll To Top icon appears
    var header = $('header');
    
		if ($(window).scrollTop() > header.height() ) {
      $('.scrollToTop').css('opacity', '1');
		} else {
      $('.scrollToTop').css('opacity', '0');
		}
  });
  
  // Scroll to Top
  $('.scrollToTop').on('click', function() {
    $('html, body').animate({scrollTop : 0}, 'slow');
    $('.scrollToTop').fadeOut();
  });
  
  // Features  left or right
  var features = $('#project_features article');
  var count = 0;
  
  $('#project_features article').each(function() {

    if (count % 2 == 0) {
      $(this).css('flex-direction', 'row-reverse');
      count++;
    } else {
      $(this).css('flex-direction', 'row');
      count++;
    }
    
  });
  
  

})(jQuery);



  
