<?php
/**
 * Template for entry header.
 * 
 * @package Aquila
 */
$the_post_id = get_the_ID();
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
	?>
</header>