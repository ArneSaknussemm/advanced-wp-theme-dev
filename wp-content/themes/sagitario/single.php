<?php

get_header();

?>
<main class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 co-sm-12">
			<?php
			if ( have_posts() ) : the_post();
					get_template_part('template-parts/content/content-single');
			endif;
			?>
		</div>
		<div class="col-lg-4 col-md-4 co-sm-12">POCO A POCO</div>
	</div>
</main>
<?php

get_sidebar();

get_footer();