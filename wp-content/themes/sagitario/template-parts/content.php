<?php
?>
<article class="col">
	<div class="card h-100" style="width: 18rem;">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><?php echo get_the_title(); ?></h5>
			<p class="card-text"><?php echo get_the_excerpt() ?></p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
		<div class="card-footer">
		<small class="text-body-secondary">Last updated 3 mins ago</small>
		</div>
	</div>
</article>

