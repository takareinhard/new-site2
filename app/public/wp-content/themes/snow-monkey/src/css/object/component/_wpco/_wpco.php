<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Style;

$accent_color = get_theme_mod( 'accent-color' );

Style::register(
	'.wpco .contents-outline ol li a::before',
	'background-color: ' . $accent_color
);
