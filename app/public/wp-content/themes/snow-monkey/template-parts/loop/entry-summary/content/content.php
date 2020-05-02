<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 7.0.0
 */

use Framework\Helper;

$template_args = [
	'entries_layout' => Helper::get_var( $_entries_layout, get_theme_mod( get_post_type() . '-entries-layout' ) ),
	'excerpt_length' => Helper::get_var( $_excerpt_length, null ),
];

/**
 * Callback for excerpt_length
 *
 * @global array $template_args
 * @param int $default_excerpt_length
 * @return int
 */
$entry_summary_content_excerpt_length = function( $default_excerpt_length ) use ( $template_args ) {
	if ( null !== $template_args['excerpt_length'] ) {
		return $template_args['excerpt_length'];
	}

	if ( 'rich-media' === $template_args['entries_layout'] ) {
		return class_exists( 'multibyte_patch' ) ? 50 : 25;
	}

	return $default_excerpt_length;
};

add_filter( 'excerpt_length', $entry_summary_content_excerpt_length, 100 );
ob_start();
the_excerpt();
$content = wp_strip_all_tags( ob_get_clean() );
remove_filter( 'excerpt_length', $entry_summary_content_excerpt_length, 100 );
?>

<div class="c-entry-summary__content">
	<?php echo esc_html( $content ); ?>
</div>
