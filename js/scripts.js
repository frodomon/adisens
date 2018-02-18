jQuery(document).ready(function() {
	jQuery('ul.main-menu').superfish();
	jQuery(function() {
		// Dropdown toggle
		jQuery('.togglebar').click(function(){
		  jQuery('.responsive-menu').toggle();
		});
	});	
	jQuery(window).scroll(function () {
    if( jQuery(window).scrollTop() > jQuery('#wrap').offset().top ){
    	jQuery('header').css('background-color','#FFFFFF');
      jQuery('.header-menu .sf-menu .menu-item a').css('color','#6B6868');
      jQuery('.header-logo #logo-header').css('display','block');
      jQuery('.header-logo #logo-header_inv').css('display','none');
    } else if ( (jQuery(window).scrollTop() == 0) && (jQuery(window).width() > 768) ){
      jQuery('header').css('background-color','transparent');
      jQuery('.header-menu .sf-menu .menu-item a').css('color','#FFFFFF');
      jQuery('.header-logo #logo-header').css('display','none');
      jQuery('.header-logo #logo-header_inv').css('display','block');
    }
	});
	jQuery(".toggle-menu li").hover(function() {
		jQuery(this).find('a').css("color", "#ffffff");
  }, function() {
  	jQuery(this).find('a').css("color", "#2F5590");
  });

	jQuery('.toggle-menu li').on('click', function(){
		jQuery(this).find('a').trigger('click');
	})

  if ( window.location.pathname != '/' ){
  	jQuery('header').addClass('bg-blanco');
    jQuery('#wrap').css('padding-top','80px');
    jQuery('.header-menu .sf-menu .menu-item a').addClass('header-color');
    jQuery('.header-logo #logo-header').addClass('show');
    jQuery('.header-logo #logo-header_inv').addClass('hide');
	}
	// Navigation Scroll - ljepo radi materem
  $('.inner a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 80;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
	
 
});