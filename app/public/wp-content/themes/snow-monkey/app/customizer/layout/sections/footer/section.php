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
	'footer',
	[
		'title'    => __( 'Footer', 'snow-monkey' ),
		'priority' => 120,
	]
);
