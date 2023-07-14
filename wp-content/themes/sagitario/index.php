<?php

get_header();

?>
<main>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			?>
			<article>
				<?php
				the_title( '<h2>', '</h2>' );
				the_post_thumbnail( 'featured-thumbnail');
				the_excerpt();
				?>
			</article>
			<?php
		endwhile;
	endif;
	?>
</main>
<?php

get_footer();