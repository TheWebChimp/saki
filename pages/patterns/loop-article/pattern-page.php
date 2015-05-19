<?php

	$site->registerStyle('mobile-pattern', $site->baseUrl('/pages/patterns/' . basename(dirname(__FILE__)) . '/mobile.css') );
	$site->enqueueStyle('mobile-pattern');

	$site->registerStyle('desktop-pattern', $site->baseUrl('/pages/patterns/' . basename(dirname(__FILE__)) . '/desktop.css') );
	$site->enqueueStyle('desktop-pattern');

	$site->registerScript('script-pattern', $site->baseUrl('/pages/patterns/' . basename(dirname(__FILE__)) . '/script.js') );
	$site->enqueueScript('script-pattern');

	$site->getParts(array('sticky-footer/header_html', 'sticky-footer/header'))
?>

	<section>
			<nav class="pattern-menu">
				<div class="inner">
					<ul class="cf">
						<li class="selected"><a href="#the-pattern">The Pattern</a></li>
						<li><a href="#code-html">HTML</a></li>
						<li><a href="#code-css">CSS</a></li>
					</ul>
				</div>
			</nav>

		<div class="inner">
			<div id="the-pattern" class="tab">
				<h2 class="titulo-bloque">The Pattern</h2>
				<p class="pattern-desc">Lista de entradas de un blog</p>

				<?php include('html.php'); ?>
			</div>

			<div id="code-html" class="tab">
				<h2 class="titulo-bloque">HTML</h2>
				<pre><code class="html"><?php echo htmlentities(requireToVar(dirname(__FILE__) . '/html.php')); ?></code></pre>
			</div>

			<div id="code-css" class="tab">
				<h2 class="titulo-bloque">Mobile</h2>
				<pre><code class="css"><?php include('mobile.css'); ?></code></pre>

				<h2 class="titulo-bloque">Desktop</h2>
				<pre><code class="css"><?php include('desktop.css'); ?></code></pre>
			</div>

			<div id="code-js" class="tab">
				<h2 class="titulo-bloque">JS</h2>
				<pre><code class="js"><?php include('script.js'); ?></code></pre>
			</div>

		</div>
	</section>

<?php $site->getParts(array('sticky-footer/footer', 'sticky-footer/footer_html')) ?>