<article>
	<header>
		<img src="<?php the_post_thumbnail_url(); ?>" alt="...">
		<small><?php echo join( ', ', wp_list_pluck( get_the_category(), 'name' )) ?></small>
		<h2><?php the_title(); ?></h2>
	</header>
	<div>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>
	<hr></hr>
	<footer>
		<small><?php the_date(); ?></small>
		<small><?php echo get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' ); ?></small>
	</footer>
	<span><?php previous_post_link(); ?></span>
	<span><?php next_post_link(); ?></span>
</article>
