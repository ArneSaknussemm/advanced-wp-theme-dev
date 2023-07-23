<?php
/**
 * The templante part for displaying a message that post cannot be found
 * 
 * @package Aquila
 */
?>

<section class="no-result not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing found', 'aquila' ); ?></h1>
	</header>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) {
			?>
				<p>
					<?php
					printf(
						wp_kses(
							__( 'Ready to publish your first post? <a href="%s">Get started here<a/>', 'aquila' ),
							array(
								'a' => array(
									'href' => array()
								)
							)
						),
						esc_url( admin_url( 'post_new.php' ) )
					);
					?>
				</p>
			<?php
		}
		elseif ( is_search() ) {
			?>
			<p><?php esc_html_e( 'Sorry but nothiing matched your searech item. Please try some different kewords', 'aquila' ); ?></p>
			<?php
			get_search_form();
		}
		else {
			?>
			<p><?php esc_html_e( 'It seems that we cannot find what you are looking for. Perhaps search can help', 'aquila' ); ?></p>
			<?php
			get_search_form();
		}

		?>
	</div>
</section>