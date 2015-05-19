<?php
	$refresh = isset( $_GET['refresh'] );
	$patterns = Saki::getPatternsList($refresh);
?>
<?php $site->getParts(array('sticky-footer/header_html', 'sticky-footer/header')) ?>

	<section>
		<div class="inner boxfix-vert">
			<div class="margins">
				<div class="row row-5 patterns-list" data-gallery="isotope">
					<?php
						if ($patterns):
							foreach ($patterns as $slug => $pattern):
					?>
					<article class="col col-3 patterns-item">
						<div class="pattern-thumbnail">
							<a href="<?php $site->urlTo("/{$slug}", true) ?>"><img src="<?php echo $pattern->thumbnail; ?>" alt="" class="img-responsive"></a>
						</div>
						<div class="pattern-details">
							<h2><a href="<?php $site->urlTo("/{$slug}", true) ?>"><?php echo $pattern->name; ?></a></h2>
							<?php if ( isset($pattern->description) ): ?>
								<p><?php echo $pattern->description; ?></p>
							<?php endif ?></div>
					</article>
					<?php
							endforeach;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>

<?php $site->getParts(array('sticky-footer/footer', 'sticky-footer/footer_html')) ?>