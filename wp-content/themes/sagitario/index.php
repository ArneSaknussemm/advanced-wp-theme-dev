<?php

get_header();

?>
<main class="container">
	<h1><?php single_post_title(); ?></h1>
	<div class="row">
		<div class="col-lg-8 col-md-8 co-sm-12">
			<?php
			if (have_posts()) {
			?>
				<section class="row row-cols-1 row-cols-md-3 g-4">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part('template-parts/content/content');
					
				endwhile;
				?>
				</section>
		</div>
		<div class="col-lg-4 col-md-4 co-sm-12">
			<?php
			get_sidebar();
			}
			?>
		</div>
	</div>
</main>
<?php

get_footer();