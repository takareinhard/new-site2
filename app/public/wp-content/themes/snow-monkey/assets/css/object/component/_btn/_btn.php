<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Style;
use Inc2734\WP_Customizer_Framework\Color;

$accent_color = get_theme_mod( 'accent-color' );

Style::register(
	'.c-btn',
	'background-color: ' . $accent_color
);

Style::register(
	[
		'.c-btn:hover',
		'.c-btn:active',
		'.c-btn:focus',
	],
	'background-color: ' . Color::darken( $accent_color, 0.05 ),
	'@media (min-width: 64em)'
);