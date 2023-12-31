<?php
/**
 * Template for entry content.
 * To be used inside WordPress The loop.
 * 
 * @package Aquila
 */
 ?>

 <div class="entry-content">
	<?php
		if ( is_single() ) {
			the_content(
				sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr</span>', 'aquila' ),
						array(
							'span' => array(
								'class' => array()
							)
						)
					), the_title( '<span class="screen-reader-text">"', '"</span>', false)
				)
			);

			wp_link_pages( array(
				'before'	=> '<div class="page-links">' . esc_html__( 'Pages:', 'aquila' ),
				'after'		=> '</div>',
			) );
		} else {
			aquila_the_excerpt(200);
			printf( '<br>' );
			echo aquila_show_more();
		}
	?>
 </div>