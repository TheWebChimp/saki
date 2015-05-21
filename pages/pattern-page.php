<?php
	$pattern = isset($site->pattern) ? $site->pattern : null;
	if (! $pattern ) {
		$site->redirectTo( $site->urlTo('/404') );
		exit;
	}

	$dependencies = array();
	$has_dependencies = false;

	foreach ($pattern->styles as $slug => $style) {
		$site->registerStyle($slug, $style);
		$site->enqueueStyle($slug);
		if ($slug != 'mobile-pattern' && $slug != 'desktop-pattern') {
			$dependencies[$slug] = array(
				'type' => 'css',
				'link' => $style
			);
			$has_dependencies = true;
		}
	}

	foreach ($pattern->scripts as $slug => $script) {
		$site->registerScript($slug, $script);
		$site->enqueueScript($slug);
		if ($slug != 'script-pattern') {
			$dependencies[$slug] = array(
				'type' => 'js',
				'link' => $script
			);
			$has_dependencies = true;
		}
	}

	//
?>
<?php $site->getParts(array('sticky-footer/header_html', 'sticky-footer/header')) ?>

	<section>
		<div class="inner boxfix-vert">
			<div class="margins">
				<h1 class="section-title">
					<a href="<?php $site->urlTo('/', true); ?>">Patterns </a>
					<span class="text-muted"><i class="fa fa-fw fa-angle-right"></i></span> <?php echo $pattern->name; ?>
				</h1>
				<!--  -->
				<nav class="pattern-menu">
					<ul class="cf">
						<li class="selected"><a href="#the-pattern">The Pattern</a></li>
						<li><a href="#code-html">HTML</a></li>
						<?php if($pattern->hasCSS): ?><li><a href="#code-css">CSS</a></li><?php endif; ?>
						<?php if($pattern->hasJS): ?><li><a href="#code-js">JS</a></li><?php endif; ?>
						<?php if($has_dependencies): ?><li><a href="#code-deps">Dependencies</a></li><?php endif; ?>
					</ul>
				</nav>
				<!--  -->
				<div id="the-pattern" class="tab">
					<h2 class="titulo-bloque">The Pattern</h2>
					<?php @include $site->baseDir("/pages/patterns/{$pattern->slug}/contents.php"); ?>
					<?php @include $site->baseDir("/pages/patterns/{$pattern->slug}/html.php"); ?>
				</div>

				<div id="code-html" class="tab">
					<a href="#" data-zclip="#code-html" class="button button-small pull-right">Copiar</a>
					<h2 class="titulo-bloque">HTML</h2>
					<pre><code class="html"><?php echo htmlentities( requireToVar( $site->baseDir("/pages/patterns/{$pattern->slug}/html.php") ) ); ?></code></pre>
				</div>

				<div id="code-css" class="tab">
					<a href="#" data-zclip="#code-mobile" class="button button-small pull-right">Copiar</a>
					<h2 class="titulo-bloque">Mobile</h2>
					<pre><code class="css"><?php @include $site->baseDir("/pages/patterns/{$pattern->slug}/mobile.css"); ?></code></pre>

					<a href="#" data-zclip="#code-desktop" class="button button-small pull-right">Copiar</a>
					<h2 class="titulo-bloque">Desktop</h2>
					<pre><code class="css"><?php @include $site->baseDir("/pages/patterns/{$pattern->slug}/desktop.css"); ?></code></pre>
				</div>

				<div id="code-js" class="tab">
					<a href="#" data-zclip="#code-js" class="button button-small pull-right">Copiar</a>
					<h2 class="titulo-bloque">JS</h2>
					<pre><code class="js"><?php @include $site->baseDir("/pages/patterns/{$pattern->slug}/script.js"); ?></code></pre>
				</div>

				<div id="code-deps" class="tab">
					<h2 class="titulo-bloque">Dependencies</h2>
					<table class="table table-hover">
						<tbody>
							<?php
								if ($dependencies):
									foreach ($dependencies as $slug => $dependency):
							?>
								<tr>
									<td><img src="<?php $site->img("type-{$dependency['type']}.png") ?>" alt="" class="icon"> <?php echo $slug; ?></td>
									<td><a href="<?php echo $dependency['link']; ?>" target="_blank"><?php echo $dependency['link']; ?></a></td>
								</tr>
							<?php
									endforeach;
								endif;
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

<?php $site->getParts(array('sticky-footer/footer', 'sticky-footer/footer_html')) ?>