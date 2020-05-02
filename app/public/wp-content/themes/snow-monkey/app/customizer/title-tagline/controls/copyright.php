<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 7.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;
use Framework\Helper;

$theme_link = sprintf(
	'<a href="https://2inc.org" target="_blank">%s</a>',
	__( 'Monkey Wrench', 'snow-monkey' )
);

$wordpress_link = sprintf(
	'<a href="https://wordpress.org/" target="_blank">%s</a>',
	__( 'WordPress', 'snow-monkey' )
);

$theme_by = sprintf(
	/* translators: %s: Theme link */
	__( 'Snow Monkey theme by %s', 'snow-monkey' ),
	$theme_link
);

$powered_by = sprintf(
	/* translators: %s: WordPress link */
	__( 'Powered by %s', 'snow-monkey' ),
	$wordpress_link
);

$copyright = $theme_by . ' ' . $powered_by;

Framework::control(
	'text',
	'mwt-copyright',
	[
		'transport'   => 'postMessage',
		'label'       => __( 'Copyright', 'snow-monkey' ),
		'description' => __( 'HTML usable', 'snow-monkey' ),
		'default'     => $copyright,
		'type'        => 'option',
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$section = Framework::get_section( 'title_tagline' );
$control = Framework::get_control( 'mwt-copyright' );
$control->join( $section );
$control->partial(
	[
		'selector'        => '.c-copyright',
		'render_callback' => function() {
			if ( Helper::get_copyright() ) {
				Helper::get_template_part( 'template-parts/footer/copyright' );
			}
		},
	]
);
