jQuery(document).ready(function($) {

	//Highlight for code
	hljs.configure({
		tabReplace: '    '
	});
	hljs.initHighlightingOnLoad();

	function bindCopyButtons() {
		$('[data-zclip]:visible').each(function() {
			var el = $(this),
				target = $( el.data('zclip') ).find('code');
			if ( el.data('zclip-bound') ) {
				// Skip bound elements to avoid zombies
				return false;
			}
			el.data('zclip-bound', true);
			el.zclip({
				path: constants.siteUrl + '/assets/ZeroClipboard.swf',
				copy: target.text(),
				afterCopy: function() {
					alert('Se ha copiado el código seleccionado');
				}
			});
		});
	}

	//Magnific
	$('.mpf-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Cargando imagen #%curr%...',
		gallery: {
			tPrev: 'Anterior (flecha izquierda)',
			tNext: 'Siguiente (flecha derecha)',
			tCounter: '%curr% de %total%',
			enabled: true,
			navigateByImgClick: true
		},
		image: {
			tError: '<a href="%url%">La imagen #%curr%</a> no pudo ser cargada.',
			titleSrc: function(item) { return item.el.attr('title'); }
		}
	});

	//Patterns Menu
	$('.pattern-menu a').on('click', function(event) {
		event.preventDefault();
		var el = $(this);
		var li = el.parents('li');
		var target = el.attr('href');

		$('.tab').hide();
		$('.pattern-menu li').removeClass('selected');
		li.addClass('selected');
		$(target).show();
		bindCopyButtons();
	});

	$('[data-gallery=isotope]').each(function() {
		var el = $(this);
		el.imagesLoaded(function() {
			el.isotope();
		});
	});

});