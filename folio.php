<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              pootlepress.com
 * @since             1.0.0
 * @package           Folio
 *
 * @wordpress-plugin
 * Plugin Name:       Folio
 * Plugin URI:        http://www.pootlepress.co.uk/folio
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            PootlePress
 * Author URI:        pootlepress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       folio
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-folio-activator.php
 */
function activate_folio() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-folio-activator.php';
	Folio_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-folio-deactivator.php
 */
function deactivate_folio() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-folio-deactivator.php';
	Folio_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_folio' );
register_deactivation_hook( __FILE__, 'deactivate_folio' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-folio.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_folio() {

	$plugin = new Folio();
	$plugin->run();

}
run_folio();
