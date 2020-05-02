<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 5.4.1
 */

use Framework\Helper;

if ( ! class_exists( 'CheckCopyContents' ) ) {
	return;
}

/**
 * Add .p-entry-content to .theContentWrap-ccc
 *
 * @param string $content
 * @param string $slug
 * @return string
 */
add_filter(
	'inc2734_view_controller_template_part_render',
	function( $content, $slug ) {
		if ( 'templates/view/content' === $slug ) {
			$content = str_replace( 'class="theContentWrap-ccc"', 'class="theContentWrap-ccc p-entry-content"', $content );
		}
		return $content;
	},
	10,
	2
);

/**
 * Support contents outline
 *
 * @param string $content
 * @param string $slug
 * @return string
 */
add_filter(
	'inc2734_wp_contents_outline_args',
	function( $args ) {
		$args['selector'] = '.theContentWrap-ccc';
		return $args;
	}
);
