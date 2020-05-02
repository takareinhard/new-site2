<?php
/*
* Plugin Name: VK All in One Expansion Unit
* Plugin URI: https://ex-unit.nagoya
* Description: This plug-in is an integrated plug-in with a variety of features that make it powerful your web site. Many features can be stopped individually. Example Facebook Page Plugin,Social Bookmarks,Print OG Tags,Print Twitter Card Tags,Print Google Analytics tag,New post widget,Insert Related Posts and more!
* Version: 9.11.4.0
* Author: Vektor,Inc.
* Text Domain: vk-all-in-one-expansion-unit
* Domain Path: /languages
* Author URI: https://vektor-inc.co.jp
* GitHub Plugin URI: vektor-inc/VK-All-in-One-Expansion-Unit
* GitHub Plugin URI: https://github.com/vektor-inc/VK-All-in-One-Expansion-Unit
* License: GPL2
*/

/*
Copyright 2015-2020 Vektor,Inc. ( email : kurudrive@gmail.com )

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'VEU_FONT_AWESOME_DEFAULT_VERSION', 4.7 );

// Get Plugin version
$data = get_file_data( __FILE__, array( 'version' => 'Version' ) );
global $vkExUnit_version;
$vkExUnit_version = $data['version'];

// include('plugins/css_customize/css-customize.php');
load_plugin_textdomain( 'vk-all-in-one-expansion-unit', false, basename( dirname( __FILE__ ) ) . '/languages' );



function veu_get_directory( $path = '' ) {
	return $dirctory = dirname( __FILE__ ) . $path;
}
function veu_get_directory_uri( $path = '' ) {
	return plugins_url( $path, __FILE__ );
}

// PHP Version check
if ( version_compare( phpversion(), '5.4.45' ) >= 0 ) {
	require_once veu_get_directory() . '/initialize.php';

	if ( version_compare( phpversion(), '5.6' ) < 0 && is_admin() ) {
		add_filter( 'admin_notices', 'veu_phpversion_warning_notice' );
	}
} else {
	add_filter( 'admin_notices', 'veu_phpversion_error' );
}

if ( function_exists( 'register_deactivation_hook' ) ) {
	register_deactivation_hook( __FILE__, 'veu_uninstall_function' );
}

function veu_uninstall_function() {
	require_once veu_get_directory() . '/initialize.php';
	include veu_get_directory( '/uninstaller.php' );
}

function veu_phpversion_error( $val ) {
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return $val;
	}
	?>
	<div class="notice notice-error error is-dismissible"><p>
			<?php
			/*
			本来システム名は vkExUnit_get_little_short_name() で引っ張るが、PHPのバージョンが低くて vkExUnit_get_little_short_name() 関数が読み込まれていないので"VK ExUnit"直書き
			*/
			printf(
				__( 'The current PHP version(%s) is too old, so VK ExUnit will not work.', 'vk-all-in-one-expansion-unit' ),
				phpversion()
			);
			?>
			<?php _e( 'VK ExUnit supports PHP5.6 or later.', 'vk-all-in-one-expansion-unit' ); ?>
		</p></div>
	<?php
	return $val;
}

function veu_phpversion_warning_notice( $val ) {
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return $val;
	}
	global $hook_suffix;
	if ( strpos( $hook_suffix, 'vk-all-in-one-expansion-unit' ) == false ) {
		return;
	}
	?>
	<div class="notice notice-warning is-dismissible"><p>
			<?php printf( __( 'Current PHP Version(%s) is old.', 'vk-all-in-one-expansion-unit' ), phpversion() ); ?>
			<?php printf( __( '%s supports PHP5.6 or later.', 'vk-all-in-one-expansion-unit' ), veu_get_little_short_name() ); ?>
		</p></div>
	<?php
	return $val;
}

// add_filter('vk-admin-is-dashboard-active','vk_dashboard_hidden');
// function vk_dashboard_hidden(){
// return false;
// }
// remove_action( 'wp_dashboard_setup',array( 'Vk_Admin', 'dashboard_widget'),1 );
//

/**
 * Modify the height of a specific CSS class to fix an issue in Chrome 77 with Gutenberg.
 *
 * @see https://github.com/WordPress/gutenberg/issues/17406
 */
add_action(
	'admin_head',
	function() {
		echo '<style>.block-editor-writing-flow { height: auto; }</style>'; // phpcs:ignore
	}
);
