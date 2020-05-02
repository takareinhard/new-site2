<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 4.2.13
 */

use Inc2734\WP_Pure_CSS_Gallery\Pure_CSS_Gallery;

/**
 * Activate Pure CSS Gallery
 */
add_action(
	'wp_loaded',
	function() {
		$use_pure_css_gallery = get_theme_mod( 'pure-css-gallery' );
		if ( ! $use_pure_css_gallery ) {
			return;
		}

		if ( has_filter( 'post_gallery' ) ) {
			return;
		}

		if ( class_exists( 'Jetpack' ) ) {
			$jetpack_active_modules = \Jetpack::get_active_modules();
			if ( in_array( 'carousel', $jetpack_active_modules ) || in_array( 'tiled-gallery', $jetpack_active_modules ) ) {
				return;
			}
		}

		new Pure_CSS_Gallery();
	}
);
