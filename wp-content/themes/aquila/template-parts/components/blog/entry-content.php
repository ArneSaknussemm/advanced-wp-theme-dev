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
			echo 'loco';
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
		} else {
			aquila_the_excerpt(200);
			echo aquila_show_more();
		}
	?>
 </div>