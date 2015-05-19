jQuery(document).ready(function($) {

	//Toggle Dropotron menu
	$('.dropotron .hamburger').on('click', function(event) {

		event.preventDefault();
		var el = $(this);
		var target = el.data('target');
		$(target).toggleClass('open');
	});

});