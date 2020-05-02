<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 5.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

if ( ! is_customize_preview() ) {
	return;
}

Framework::section(
	'singular-post',
	[
		'title'           => __( 'Page layout', 'snow-monkey' ),
		'description'     => __( 'By the type of page displayed on the preview screen on the right side of the screen, the display setting items switched.', 'snow-monkey' ) . __( 'Currently posts and pages settings is displayed.', 'snow-monkey' ),
		'priority'        => 130,
		'active_callback' => function() {
			if ( class_exists( '\woocommerce' ) ) {
				if ( is_cart() || is_checkout() || is_account_page() ) {
					return false;
				}
			}
			return ( ! is_front_page() && ( is_singular( [ 'post', 'page' ] ) || is_404() ) );
		},
	]
);
