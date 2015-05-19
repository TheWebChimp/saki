<?php
	# Details JSON
	# ============================================================================================ #

	$details = false;

	if(file_exists(dirname(__FILE__) . '/details.json')){

		$details = json_decode(file_get_contents(dirname(__FILE__) . '/details.json'));
	}

	# Check files
	# ============================================================================================ #

	$css_mobile = file_exists(dirname(__FILE__) . '/mobile.css');
	$css_desktop = file_exists(dirname(__FILE__) . '/desktop.css');
	$css = $css_mobile || $css_desktop;
	$js = file_exists(dirname(__FILE__) . '/script.js');

	# Styles
	# ============================================================================================ #

	$site->registerStyle('mobile-pattern', $site->baseUrl('/pages/patterns/' . basename(dirname(__FILE__)) . '/mobile.css') );
	$site->enqueueStyle('mobile-pattern');

	$site->registerStyle('desktop-pattern', $site->baseUrl('/pages/patterns/' . basename(dirname(__FILE__)) . '/desktop.css') );
	$site->enqueueStyle('desktop-pattern');

	# Scripts
	# ============================================================================================ #
	if(isset($details->scripts)){

		foreach($details->scripts as $script_key => $script){

			$site->registerScript($script_key, $script );
			$site->enqueueScript($script_key);
		}
	}

	if($js):
		$site->registerScript('script-pattern', $site->baseUrl('/pages/patterns/' . basename(dirname(__FILE__)) . '/script.js') );
		$site->enqueueScript('script-pattern');
	endif;

	$site->getParts(array('sticky-footer/header_html', 'sticky-footer/header'))
?>

	<section>
			<nav class="pattern-menu">
				<div class="inner">
					<ul class="cf">
						<li class="selected"><a href="#the-pattern">The Pattern</a></li>
						<li><a href="#code-html">HTML</a></li>

						<?php if($css): ?><li><a href="#code-css">CSS</a></li><?php endif; ?>
						<?php if($js): ?><li><a href="#code-js">JS</a></li><?php endif; ?>
					</ul>
				</div>
			</nav>

		<div class="inner">
			<div id="the-pattern" class="tab">
				<h2 class="titulo-bloque">The Pattern</h2>
				<div class="pattern-desc">
					<?php echo $details->description; ?>
				</div>

				<?php include('html.php'); ?>
			</div>

			<div id="code-html" class="tab">
				<h2 class="titulo-bloque">HTML</h2>
				<pre><code class="html"><?php echo htmlentities(requireToVar(dirname(__FILE__) . '/html.php')); ?></code></pre>
			</div>

			<?php if($css): ?>
				<div id="code-css" class="tab">
					<?php if($css_mobile): ?>
						<h2 class="titulo-bloque">Mobile</h2>
						<pre><code class="css"><?php include('mobile.css'); ?></code></pre>
					<?php endif; ?>

					<?php if($css_mobile): ?>
						<h2 class="titulo-bloque">Desktop</h2>
						<pre><code class="css"><?php include('desktop.css'); ?></code></pre>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if($js): ?>
				<div id="code-js" class="tab">
					<h2 class="titulo-bloque">JS</h2>
					<pre><code class="js"><?php include('script.js'); ?></code></pre>
				</div>
			<?php endif; ?>
		</div>
	</section>

<?php $site->getParts(array('sticky-footer/footer', 'sticky-footer/footer_html')) ?>