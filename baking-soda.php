<?php
/**
 * Plugin Name: Baking Soda
 * Plugin URI: https://github.com/tarosky/baking-soda
 * Description: Add dummy contents and
 * Author: Tarosky INC.
 * Version: nightly
 * Author URI: https://tarosky.co.jp/
 * License: GPL3.0 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: baking-soda
 * Domain Path: /languages
 */

defined( 'ABSPATH' ) || die( 'Do not access directly.' );

/**
 * Register plugin activation hook.
 */
add_action( 'plugins_loaded', function() {
	// Load plugin textdomain.
	load_plugin_textdomain( 'baking-soda', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	// Load autoloader.
	require_once __DIR__ . '/vendor/autoload.php';
	if ( defined( 'WP_CLI' ) && WP_CLI ) {
		WP_CLI::add_command( 'soda', 'Tarosky\BakingSoda\Command' );
	}
} );
