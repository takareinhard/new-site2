<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 7.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;
use Framework\Helper;

if ( ! is_customize_preview() ) {
	return;
}

$custom_post_types = Helper::get_custom_post_types();

foreach ( $custom_post_types as $custom_post_type ) {
	$custom_post_type_object = get_post_type_object( $custom_post_type );

	Framework::section(
		'design-' . $custom_post_type,
		[
			'title' => sprintf(
				/* translators: 1: Custom post type label */
				__( '%1$s pages settings', 'snow-monkey' ),
				$custom_post_type_object->label
			),
			'priority'        => 110,
			'active_callback' => function() use ( $custom_post_type_object ) {
				return is_singular( $custom_post_type_object->name );
			},
		]
	);
}
