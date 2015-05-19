<?php
	/**
	 * functions.inc.php
	 * Add extra functions in this file
	 */

	# Basic set-up ---------------------------------------------------------------------------------

	# Include styles

	// Fonts
	$site->registerStyle('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' );
	$site->registerStyle('google.open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,800italic,400italic,300italic|Open+Sans+Condensed:300,700,300italic' );
	$site->registerStyle('google.oswald', '//fonts.googleapis.com/css?family=Oswald:400,700,300' );

	// Plugins
	$site->registerStyle('highlight.js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/default.min.css' );
	$site->registerStyle('magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/magnific-popup.css' );

	// Structure
	$site->registerStyle('reset', $site->baseUrl('/css/reset.css') );
	$site->registerStyle('boilerplate', $site->baseUrl('/css/boilerplate.css') );
	$site->registerStyle('sticky-footer', $site->baseUrl('/css/sticky-footer.css') );
	$site->registerStyle('the-content', $site->baseUrl('/css/the-content.css') );

	$site->registerStyle('style', $site->baseUrl('/css/style.css'), array(

		// Fonts
		'font-awesome',
		'google.open-sans',
		'google.oswald',

		// Plugins
		'highlight.js',
		'magnific-popup',

		// Structure
		'reset',
		'boilerplate',
		'sticky-footer',
		'the-content'
	));
	$site->enqueueStyle('style');

	# Include scripts
	$site->registerScript('highlight.js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js' );
	$site->registerScript('isotope', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js' );
	$site->registerScript('imagesloaded', '//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.1.8/imagesloaded.pkgd.min.js' );
	$site->registerScript('jquery.magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js' );
	$site->registerScript('jquery.zclip', $site->baseUrl('/js/jquery.zclip.min.js'), array('jquery') );

	$site->registerScript('script', $site->baseUrl('/js/script.js'), array(
		'jquery',

		// Plugins
		'highlight.js',
		'isotope',
		'imagesloaded',
		'jquery.zclip',
		'jquery.magnific-popup'
	));
	$site->enqueueScript('script');

	# Include extra files
	include $site->baseDir('/external/utilities.inc.php');
	include $site->baseDir('/external/ajax.inc.php');
	include $site->baseDir('/external/saki.inc.php');

	# Meta tags
	$site->addMeta('UTF-8', '', 'charset');
	$site->addMeta('viewport', 'width=device-width, initial-scale=1');

	$site->addMeta('og:title', $site->getPageTitle(), 'property');
	$site->addMeta('og:site_name', $site->getSiteTitle(), 'property');
	$site->addMeta('og:description', $site->getSiteTitle(), 'property');
	$site->addMeta('og:image', $site->urlTo('/favicon.png'), 'property');
	$site->addMeta('og:type', 'website', 'property');
	$site->addMeta('og:url', $site->urlTo('/'), 'property');

	# Pages
	$site->addPage('pattern', 'pattern-page');

	# Saki :3
	Saki::init();

?>