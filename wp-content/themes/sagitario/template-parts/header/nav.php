<?php
/**
 * Header navigation template
 * 
 * @package Sagitario
 */
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<?php
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}	
		?>	
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
		wp_nav_menu(
			array(
				//'menu'			=> '',
				'menu_class'		=> 'navbar-nav me-auto mb-2 mb-lg-0',
				//'menu_id'			=> 'aver-id',
				//'container'		=> 'div',
				'container_class'	=> 'collapse navbar-collapse',
				'container_id'		=> 'navbarSupportedContent',
				//'before'			=> 'before',
				//'after'			=> 'after',
				//'link_before'		=> 'lb' ,
				//'link_after'		=> ' la',
				//'echo'			=> true,
				//'walker'			=> '',
				'theme_location'	=> 'sagitario-header-menu',
				'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul><form class="d-flex" role="search">
											<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
											<button class="btn btn-outline-success" type="submit">Search</button></form>'
			)
		);
		?>
	</div>
</nav>


