<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 5.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'text',
	'mwt-google-tag-manager-id',
	array(
		'label'       => __( 'Tag Manager ID', 'snow-monkey' ),
		'description' => __( 'e.g. GTM-X11X1XX', 'snow-monkey' ),
		'type'        => 'option',
		'priority'    => 100,
	)
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'seo-sns' );
$section = Framework::get_section( 'google-tag-manager' );
$control = Framework::get_control( 'mwt-google-tag-manager-id' );
$control->join( $section )->join( $panel );
