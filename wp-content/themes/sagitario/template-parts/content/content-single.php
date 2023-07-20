<article <?php post_class(); ?>>
	<header>
		<?php the_post_thumbnail('featured-thumbnail'); ?>
		<small><?php echo 'Categorías: ' . join( ', ', wp_list_pluck( get_the_category(), 'name' )); ?></small>
		<h2><?php the_title(); ?></h2>
		<p><?php the_author(); ?></p>
	</header>
	<div>
		<p><?php the_date(); ?></p>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>
	<hr></hr>
	<footer>
		<small><?php echo get_the_tag_list( 'Etiquetas: ', ', ' ); ?></small>
	</footer>
	<span><?php previous_post_link(); ?></span>
	<span><?php next_post_link(); ?></span>
</article>
