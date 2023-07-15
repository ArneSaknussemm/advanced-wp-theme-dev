<?php
/**
 * Header navigation template
 * 
 * @package Sagitario
 */
?>


<?php
if ( function_exists( 'the_custom_logo' ) ) {
	the_custom_logo();
}	
?>	
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
		function cocoloco($classes, $menu_item, $args, $depth) {
			
			if ('sagitario-header-menu' === $args->theme_location ) {
				$classes[] = 'nav-item';
				if ( in_array('menu-item-has-children', $menu_item->classes) ) {
					$classes[] = 'dropdown';
				}
			}
			return $classes;
		}
		add_filter( 'nav_menu_css_class' , 'cocoloco', 10, 4 );
		
		function locococo($atts, $menu_item, $args, $depth) {
			
			if ( 'sagitario-header-menu' === $args->theme_location ) {
				$atts['class'] = 'nav-link';
				if ( in_array('menu-item-has-children', $menu_item->classes) )
				{
					$atts['class'] = 'nav-link dropdown-toggle';
					$atts['role'] = 'button';
					$atts['data-bs-toggle'] = 'dropdown';
					$atts['aria-expanded'] = 'false';
				}
			}
			return $atts;
		}
		add_filter( 'nav_menu_link_attributes', 'locococo', 10, 4 );

		function polopolo($classes, $args, $depth) {
			
			if ( 'sagitario-header-menu' === $args->theme_location ) {
				$classes['class'] = 'dropdown-menu';
			}
			return $classes;
		}
		add_filter( 'nav_menu_submenu_css_class', 'polopolo', 10, 3 );

		wp_nav_menu(
			array(
				//'menu'				=> '',
				'menu_class'		=> 'navbar-nav me-auto mb-2 mb-lg-0',
				//'menu_id'			=> 'aver-id',
				//'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse',
				'container_id'		=> 'navbarSupportedContent',
				//'before'			=> 'before',
				//'after'				=> 'after',
				//'link_before'		=> 'lb' ,
				//'link_after'		=> ' la',
				//'echo'				=> true,
				//'walker'			=> '',
				'theme_location'	=> 'sagitario-header-menu',
				'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>		<form class="d-flex" role="search">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		</form>'


			)
		);
		?>

	</div>
</nav>


