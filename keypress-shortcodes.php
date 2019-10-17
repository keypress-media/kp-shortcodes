<?php

/**
 * @wordpress-plugin
 * Plugin Name:       KeyPress Shortcodes
 * Plugin URI:        https://github.com/keypress-media/kp-shortcodes
 * Description:       Adds extra shortcodes to your WaaS.
 * Version:           1.0.0
 * Author:            KeyPress Media LLC
 * Author URI:        https://getkeypress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kp-shortcodes
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Plugin Root File.
if ( ! defined( 'KP_SHORTCODES_PLUGIN_FILE' ) ) {
	define( 'KP_SHORTCODES_PLUGIN_FILE', __FILE__ );
}

// Plugin Folder Path.
if ( ! defined( 'KP_SHORTCODES_PLUGIN_DIR' ) ) {
	define( 'KP_SHORTCODES_PLUGIN_DIR', plugin_dir_path( KP_SHORTCODES_PLUGIN_FILE ) );
}

require_once KP_SHORTCODES_PLUGIN_DIR . 'includes/class-kp-shortcodes.php';