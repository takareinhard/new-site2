<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 5.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'select',
	'base-font',
	[
		'label'    => __( 'Base font', 'snow-monkey' ),
		'priority' => 120,
		'default'  => 'sans-serif',
		'choices'  => [
			'sans-serif'    => __( 'Sans serif', 'snow-monkey' ),
			'serif'         => __( 'Serif', 'snow-monkey' ),
			'noto-sans-jp'  => __( 'Noto Sans JP', 'snow-monkey' ),
			'noto-serif-jp' => __( 'Noto Serif JP', 'snow-monkey' ),
		],
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'base-design' );
$control = Framework::get_control( 'base-font' );
$control->join( $section )->join( $panel );
