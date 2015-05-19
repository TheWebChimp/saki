jQuery(document).ready(function($) {

	//Isotope is required
	var isotope_gallery = $('.isotope-gallery .the-gallery');

	isotope_gallery.imagesLoaded(function(){

		isotope_gallery.isotope({
			itemSelector: '.gallery-image',
			masonry: { columnWidth: 1 }
		});
	});

	$('[data-isotope-filter]').on('click', function(event) {
		event.preventDefault();
		var el = $(this);
		var filter = el.data('isotope-filter');

		isotope_gallery.isotope({ filter: filter });
	});
});