<?php
/**
 * Todo esto es para la lazy image ya no es necesario
 * 
 */

 function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = array() ) {
	$custom_thumbnail = '';

	if ( null === $post_id ) {
		$post_id = get_the_ID();
	}

	if ( has_post_thumbnail( $post_id )) {
		$default_attributes = array(
			'loading'	=> 'lazy',
		);
	}

	$atributes = array_merge( $additional_attributes, $default_attributes );

	$custom_thumbnail = wp_get_attachment_image(
		get_post_thumbnail_id( $post_id ),
		$size,
		false,
		$atributes
	);

	return $custom_thumbnail;

 }

 function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = array() ) {
	echo get_the_post_custom_thumbnail( $post_id, $size, $additional_attributes );
 }