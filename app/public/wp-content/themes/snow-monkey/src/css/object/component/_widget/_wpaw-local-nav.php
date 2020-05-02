<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_Customizer_Framework\Style;

$accent_color = get_theme_mod( 'accent-color' );

Style::register(
	[
		'.wpaw-local-nav__item > a:hover',
		'.wpaw-local-nav__subitem > a:hover',
		'.wpaw-local-nav__item > a:active',
		'.wpaw-local-nav__subitem > a:active',
		'.wpaw-local-nav__item > a:focus',
		'.wpaw-local-nav__subitem > a:focus',
	],
	'color: ' . $accent_color,
	'@media (min-width: 64em)'
);

Style::register(
	'.wpaw-local-nav__subitem__icon',
	'color:' . $accent_color
);

Style::register(
	[
		'.wpaw-local-nav--vertical .wpaw-local-nav__subitem .wpaw-local-nav__subitem > a:hover',
		'.wpaw-local-nav--vertical .wpaw-local-nav__subitem .wpaw-local-nav__subitem > a:active',
		'.wpaw-local-nav--vertical .wpaw-local-nav__subitem .wpaw-local-nav__subitem > a:focus',
	],
	'color: ' . $accent_color,
	'@media (min-width: 64em)'
);
