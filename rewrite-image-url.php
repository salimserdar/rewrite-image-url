<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/salimserdar
 * @since             1.0.0
 * @package           Rewrite_Image_Url
 *
 * @wordpress-plugin
 * Plugin Name:       Rewrite Image URL
 * Plugin URI:        https://github.com/salimserdar
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Salim Serdar Koksal
 * Author URI:        https://github.com/salimserdar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rewrite-image-url
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'REWRITE_IMAGE_URL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rewrite-image-url-activator.php
 */
function activate_rewrite_image_url() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rewrite-image-url-activator.php';
	Rewrite_Image_Url_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rewrite-image-url-deactivator.php
 */
function deactivate_rewrite_image_url() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rewrite-image-url-deactivator.php';
	Rewrite_Image_Url_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rewrite_image_url' );
register_deactivation_hook( __FILE__, 'deactivate_rewrite_image_url' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rewrite-image-url.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rewrite_image_url() {

	$plugin = new Rewrite_Image_Url();
	$plugin->run();

}
run_rewrite_image_url();
