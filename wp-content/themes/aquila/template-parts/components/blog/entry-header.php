<?php
/**
 * Template for entry header.
 * 
 * @package Aquila
 */
$the_post_id = get_the_ID();
$hide_title = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ! empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';
$has_post_thmbnail = get_the_post_thumbnail( $the_post_id );
?>
<header class="entry-header">
	<?php
		// Feature image.
		if ($has_post_thmbnail) {
			?>
				<div class="entry-image mb-3">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php
							the_post_custom_thumbnail(
								$the_post_id,
								'featured-thumbnail',
								array(
									'sizes' => '(max-width: 416px) 416px, 257px',
									'class' => 'attachment-featured-thumbnail size-featured-image',
								)
							)
						?>
					</a>
				</div>
			<?php
		}

		// Title
		if ( is_single() || is_page()) {
			printf(
				'<h1 class="page-title text-dark %1$s">%2$s</h1>',
				esc_attr( $heading_class ),
				wp_kses_post( get_the_title() )
			);
		} else {
			printf(
				'<h2 class="entry-title mb-3"><a href="%1$s" class="text-dark">%2$s</a></h2>',
				esc_attr( get_the_permalink() ),
				wp_kses_post( get_the_title() )
			);
		}
	?>
</header>