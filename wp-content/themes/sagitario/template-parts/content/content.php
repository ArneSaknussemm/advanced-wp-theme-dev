<?php
?>
<article class="col">
	<div class="card h-100" style="width: 18rem;">
		<img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?php the_title(); ?></h5>
			<p class="card-text"><?php the_excerpt() ?></p>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
		</div>
		<div class="card-footer">
		<small class="text-body-secondary"><?php the_date(); ?></small>
		</div>
	</div>
</article>

