jQuery(document).ready(function($) {

	// $(window).scroll(function(){
	// 	if ($(this).scrollTop() > 100 && ) {
	// 		$('.back-to-top').fadeIn();
	// 	} else {
	// 		$('.back-to-top').fadeOut();
	// 	}
	// });

	//Click event to scroll to top
	$('.back-to-top').on('click', function(){

		$('html, body').animate({ scrollTop : 0 }, 800);
		return false;
	});
});