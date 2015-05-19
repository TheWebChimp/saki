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
						<li><a href="#code-js">JS</a></li>
					</ul>
				</div>
			</nav>

		<div class="inner">
			<div id="the-pattern" class="tab">
				<h2 class="titulo-bloque">The Pattern</h2>
				<p class="pattern-desc">Botón que te regresa al top del sitio</p>

				<div class="the-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ipsum massa. Nam fringilla bibendum tellus, cursus iaculis ligula elementum ac. Mauris in tellus vel nunc rutrum tempus. Etiam vitae vulputate ex. Nulla rhoncus tristique ipsum. Integer suscipit, ligula pharetra mattis tempor, mi dui pulvinar lacus, sed feugiat sapien sapien et lectus. Integer pretium nisi erat, a varius nulla luctus blandit. Integer vitae lacus nec sem pretium sodales. Sed malesuada, ante nec interdum suscipit, dolor ante dignissim massa, at volutpat dui sem sit amet ligula.</p>

					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed lobortis urna. Proin congue vel ligula id malesuada. Aliquam erat volutpat. Quisque porttitor vel dui quis sollicitudin. Morbi tincidunt, magna congue consectetur facilisis, velit urna posuere sapien, sed maximus leo tellus vel mauris. Sed maximus ligula ut purus maximus volutpat.</p>

					<p>Proin ultricies, nibh sed ullamcorper finibus, risus quam vulputate tellus, et auctor quam nisl vitae turpis. Suspendisse tincidunt arcu sit amet neque finibus, sit amet tempor justo mattis. Nullam rutrum arcu quis libero sollicitudin, eu pellentesque diam aliquet. Proin iaculis, lectus id lacinia dignissim, est leo malesuada ipsum, quis tincidunt elit diam imperdiet metus. Phasellus venenatis mi in libero dapibus, at pulvinar dolor ultrices. Vivamus id ornare felis, et suscipit lacus. Ut felis massa, tempus nec accumsan sit amet, blandit id turpis. Ut tempus nec turpis et ultrices. Nulla sodales gravida turpis, non pretium neque iaculis nec. Donec finibus nisi et nisl semper tristique. Mauris aliquet varius consectetur. Mauris sit amet diam ut dui feugiat pellentesque malesuada nec est. Nullam fringilla libero magna, sed faucibus nulla gravida at. Aenean aliquet sem odio, a vulputate metus ultrices eget.</p>

					<p>Pellentesque cursus euismod hendrerit. Etiam blandit nunc nec erat egestas venenatis. Cras lacinia mi aliquam odio tempor tempus. Donec gravida nisi tellus, ut vestibulum augue accumsan vitae. Nullam et eros felis. Vivamus maximus porta diam, sit amet placerat urna aliquet vitae. Vestibulum enim nulla, fringilla non sapien eu, mollis consectetur felis. Quisque pulvinar, erat non aliquet lacinia, ligula augue blandit augue, nec sodales velit sapien ut sem.</p>

					<p>Suspendisse malesuada eros eu mattis scelerisque. Pellentesque ipsum metus, luctus eu velit non, convallis mollis nulla. Etiam imperdiet, ex at tincidunt suscipit, ligula dolor faucibus neque, id laoreet ipsum neque eu sem. Proin euismod nunc at nisi auctor ullamcorper. Praesent varius diam vitae ex dapibus accumsan vitae id lacus. Aenean lectus odio, malesuada eget porttitor non, dictum eget lectus. Mauris id velit vel quam luctus tristique id sit amet ante. Donec ac magna quis nisi interdum accumsan in sit amet nunc. In at massa facilisis, posuere urna non, ultricies magna. In enim enim, blandit non porta eget, eleifend eu tortor. Curabitur vehicula, mauris ut bibendum efficitur, augue dui sodales leo, at ultricies ipsum lectus nec ante. Curabitur sed odio sem. Vivamus arcu orci, condimentum id sem ut, scelerisque consequat ligula. Sed porttitor nulla rutrum enim congue suscipit. Phasellus dui metus, gravida nec risus in, interdum tempor ipsum. Duis egestas eros tempor efficitur feugiat.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ipsum massa. Nam fringilla bibendum tellus, cursus iaculis ligula elementum ac. Mauris in tellus vel nunc rutrum tempus. Etiam vitae vulputate ex. Nulla rhoncus tristique ipsum. Integer suscipit, ligula pharetra mattis tempor, mi dui pulvinar lacus, sed feugiat sapien sapien et lectus. Integer pretium nisi erat, a varius nulla luctus blandit. Integer vitae lacus nec sem pretium sodales. Sed malesuada, ante nec interdum suscipit, dolor ante dignissim massa, at volutpat dui sem sit amet ligula.</p>

					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed lobortis urna. Proin congue vel ligula id malesuada. Aliquam erat volutpat. Quisque porttitor vel dui quis sollicitudin. Morbi tincidunt, magna congue consectetur facilisis, velit urna posuere sapien, sed maximus leo tellus vel mauris. Sed maximus ligula ut purus maximus volutpat.</p>

					<p>Proin ultricies, nibh sed ullamcorper finibus, risus quam vulputate tellus, et auctor quam nisl vitae turpis. Suspendisse tincidunt arcu sit amet neque finibus, sit amet tempor justo mattis. Nullam rutrum arcu quis libero sollicitudin, eu pellentesque diam aliquet. Proin iaculis, lectus id lacinia dignissim, est leo malesuada ipsum, quis tincidunt elit diam imperdiet metus. Phasellus venenatis mi in libero dapibus, at pulvinar dolor ultrices. Vivamus id ornare felis, et suscipit lacus. Ut felis massa, tempus nec accumsan sit amet, blandit id turpis. Ut tempus nec turpis et ultrices. Nulla sodales gravida turpis, non pretium neque iaculis nec. Donec finibus nisi et nisl semper tristique. Mauris aliquet varius consectetur. Mauris sit amet diam ut dui feugiat pellentesque malesuada nec est. Nullam fringilla libero magna, sed faucibus nulla gravida at. Aenean aliquet sem odio, a vulputate metus ultrices eget.</p>

					<p>Pellentesque cursus euismod hendrerit. Etiam blandit nunc nec erat egestas venenatis. Cras lacinia mi aliquam odio tempor tempus. Donec gravida nisi tellus, ut vestibulum augue accumsan vitae. Nullam et eros felis. Vivamus maximus porta diam, sit amet placerat urna aliquet vitae. Vestibulum enim nulla, fringilla non sapien eu, mollis consectetur felis. Quisque pulvinar, erat non aliquet lacinia, ligula augue blandit augue, nec sodales velit sapien ut sem.</p>

					<p>Suspendisse malesuada eros eu mattis scelerisque. Pellentesque ipsum metus, luctus eu velit non, convallis mollis nulla. Etiam imperdiet, ex at tincidunt suscipit, ligula dolor faucibus neque, id laoreet ipsum neque eu sem. Proin euismod nunc at nisi auctor ullamcorper. Praesent varius diam vitae ex dapibus accumsan vitae id lacus. Aenean lectus odio, malesuada eget porttitor non, dictum eget lectus. Mauris id velit vel quam luctus tristique id sit amet ante. Donec ac magna quis nisi interdum accumsan in sit amet nunc. In at massa facilisis, posuere urna non, ultricies magna. In enim enim, blandit non porta eget, eleifend eu tortor. Curabitur vehicula, mauris ut bibendum efficitur, augue dui sodales leo, at ultricies ipsum lectus nec ante. Curabitur sed odio sem. Vivamus arcu orci, condimentum id sem ut, scelerisque consequat ligula. Sed porttitor nulla rutrum enim congue suscipit. Phasellus dui metus, gravida nec risus in, interdum tempor ipsum. Duis egestas eros tempor efficitur feugiat.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ipsum massa. Nam fringilla bibendum tellus, cursus iaculis ligula elementum ac. Mauris in tellus vel nunc rutrum tempus. Etiam vitae vulputate ex. Nulla rhoncus tristique ipsum. Integer suscipit, ligula pharetra mattis tempor, mi dui pulvinar lacus, sed feugiat sapien sapien et lectus. Integer pretium nisi erat, a varius nulla luctus blandit. Integer vitae lacus nec sem pretium sodales. Sed malesuada, ante nec interdum suscipit, dolor ante dignissim massa, at volutpat dui sem sit amet ligula.</p>

					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed lobortis urna. Proin congue vel ligula id malesuada. Aliquam erat volutpat. Quisque porttitor vel dui quis sollicitudin. Morbi tincidunt, magna congue consectetur facilisis, velit urna posuere sapien, sed maximus leo tellus vel mauris. Sed maximus ligula ut purus maximus volutpat.</p>

					<p>Proin ultricies, nibh sed ullamcorper finibus, risus quam vulputate tellus, et auctor quam nisl vitae turpis. Suspendisse tincidunt arcu sit amet neque finibus, sit amet tempor justo mattis. Nullam rutrum arcu quis libero sollicitudin, eu pellentesque diam aliquet. Proin iaculis, lectus id lacinia dignissim, est leo malesuada ipsum, quis tincidunt elit diam imperdiet metus. Phasellus venenatis mi in libero dapibus, at pulvinar dolor ultrices. Vivamus id ornare felis, et suscipit lacus. Ut felis massa, tempus nec accumsan sit amet, blandit id turpis. Ut tempus nec turpis et ultrices. Nulla sodales gravida turpis, non pretium neque iaculis nec. Donec finibus nisi et nisl semper tristique. Mauris aliquet varius consectetur. Mauris sit amet diam ut dui feugiat pellentesque malesuada nec est. Nullam fringilla libero magna, sed faucibus nulla gravida at. Aenean aliquet sem odio, a vulputate metus ultrices eget.</p>

					<p>Pellentesque cursus euismod hendrerit. Etiam blandit nunc nec erat egestas venenatis. Cras lacinia mi aliquam odio tempor tempus. Donec gravida nisi tellus, ut vestibulum augue accumsan vitae. Nullam et eros felis. Vivamus maximus porta diam, sit amet placerat urna aliquet vitae. Vestibulum enim nulla, fringilla non sapien eu, mollis consectetur felis. Quisque pulvinar, erat non aliquet lacinia, ligula augue blandit augue, nec sodales velit sapien ut sem.</p>

					<p>Suspendisse malesuada eros eu mattis scelerisque. Pellentesque ipsum metus, luctus eu velit non, convallis mollis nulla. Etiam imperdiet, ex at tincidunt suscipit, ligula dolor faucibus neque, id laoreet ipsum neque eu sem. Proin euismod nunc at nisi auctor ullamcorper. Praesent varius diam vitae ex dapibus accumsan vitae id lacus. Aenean lectus odio, malesuada eget porttitor non, dictum eget lectus. Mauris id velit vel quam luctus tristique id sit amet ante. Donec ac magna quis nisi interdum accumsan in sit amet nunc. In at massa facilisis, posuere urna non, ultricies magna. In enim enim, blandit non porta eget, eleifend eu tortor. Curabitur vehicula, mauris ut bibendum efficitur, augue dui sodales leo, at ultricies ipsum lectus nec ante. Curabitur sed odio sem. Vivamus arcu orci, condimentum id sem ut, scelerisque consequat ligula. Sed porttitor nulla rutrum enim congue suscipit. Phasellus dui metus, gravida nec risus in, interdum tempor ipsum. Duis egestas eros tempor efficitur feugiat.</p>
				</div>

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