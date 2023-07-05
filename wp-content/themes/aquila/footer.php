<?php
/**
 * Footer File
 * 
 * @package Aquila
 */
?>
    </div>
</div>
    <footer><h3>Footer</h3></footer>
    <?php wp_footer() ?>
	<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
				<aside>
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</aside>
			<?php
		}
	?>
</body>
</html>