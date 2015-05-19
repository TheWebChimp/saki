jQuery(document).ready(function($) {

	$('.tabs .hamburger').on('click', function(event) {
		event.preventDefault();
		var el = $(this);
		var tabs = el.parents('.tabs');
		tabs.find('ul').toggleClass('open');
	});

	$('.tabs ul a').on('click', function(event) {
		event.preventDefault();
		var el = $(this);
		var section = el.attr('href');
		var li = el.parents('li');
		var tabs = el.parents('.tabs');
		var target = tabs.data('target');
		var text = el.html();

		tabs.find('ul').removeClass('open');

		tabs.find('li').removeClass('selected');
		li.addClass('selected');

		$(target).find('.section').hide();
		tabs.find('.tab-selected').html(text);

		//$(section).fadeIn('fast');
		$(section).show();
	});
});