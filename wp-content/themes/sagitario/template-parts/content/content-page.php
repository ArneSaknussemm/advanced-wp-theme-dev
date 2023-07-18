<article class="card mb-3">
	<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
	<div class="card-body">
		<h5 class="card-title"><?php the_title(); ?></h5>
		<p class="card-text"><?php the_content(); ?></p>
		<p class="card-text"><small class="text-body-secondary"><?php the_date(); ?></small></p>
	</div>
</article>
