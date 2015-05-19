<div class="isotope-gallery cf">

	<ul class="tabs">
		<li><a href="#" data-isotope-filter="*">Todos</a></li>
		<li><a href="#" data-isotope-filter=".animals">Animales</a></li>
		<li><a href="#" data-isotope-filter=".people">Gente</a></li>
		<li><a href="#" data-isotope-filter=".sports">Deportes</a></li>
	</ul>

	<div class="the-gallery mpf-gallery">
		<?php for($i = 0; $i < 4; $i++): ?>

		<div class="gallery-image animals">
			<div class="icon"><i class="fa fa-search"></i></div>
			<a href="http://lorempixel.com/800/600/animals/<?php echo $i+1; ?>"><img src="http://lorempixel.com/397/266/animals/<?php echo $i+1; ?>" alt=""></a>
		</div>

		<div class="gallery-image people">
			<div class="icon"><i class="fa fa-search"></i></div>
			<a href="http://lorempixel.com/800/600/people/<?php echo $i+1; ?>"><img src="http://lorempixel.com/397/266/people/<?php echo $i+1; ?>" alt=""></a>
		</div>

		<div class="gallery-image sports">
			<div class="icon"><i class="fa fa-search"></i></div>
			<a href="http://lorempixel.com/800/600/sports/<?php echo $i+1; ?>"><img src="http://lorempixel.com/397/266/sports/<?php echo $i+1; ?>" alt=""></a>
		</div>

		<?php endfor; ?>
	</div>
</div>