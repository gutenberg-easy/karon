<?php
/**
 * Plugin Name: Karon - Blocks Example
 * Plugin URI: https://github.com/turtlepod/karon
 * Description: Various Blocks Example.
 * Version: 0.1.0
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 * Text Domain: karon
 * Domain Path: /languages
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @author David Chandra Purnama <david@shellcreeper.com>
 * @license https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Constants.
define( 'KARON_URL',      plugin_dir_url( __FILE__ ) );
define( 'KARON_PATH',     plugin_dir_path( __FILE__ ) );
define( 'KARON_VERSION',  defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? time() : '0.1.0' );

/**
 * Bootstrap.
 * Each block scripts are added separately to make sure we can unregister them separately if needed.
 *
 * @since 0.1.0
 */
function karon_init() {
	// Load Languages.
	load_plugin_textdomain( 'karon', false, basename( KARON_PATH ) . '/languages' );

	// Load Blocks.
	require_once( KARON_PATH . 'blocks/example1.php' );
}
add_action( 'plugins_loaded', 'karon_init' );
