<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       PayPal Buy Now Button
 * Plugin URI:        http://www.mbjtechnolabs.com
 * Description:       Easy to use add a PayPal Buy Now Button as a Page, Post and Widget with a shortcode
 * Version:           1.0.4
 * Author:            phpwebcreators
 * Author URI:        http://www.mbjtechnolabs.com
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       paypal-buy-now-button
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-paypal-buy-now-button-activator.php
 */
function activate_paypal_buy_now_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-paypal-buy-now-button-activator.php';
	MBJ_PayPal_Buy_Now_Button_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-paypal-buy-now-button-deactivator.php
 */
function deactivate_paypal_buy_now_button() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-paypal-buy-now-button-deactivator.php';
	MBJ_PayPal_Buy_Now_Button_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_paypal_buy_now_button' );
register_deactivation_hook( __FILE__, 'deactivate_paypal_buy_now_button' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-paypal-buy-now-button.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_paypal_buy_now_button() {

	$plugin = new MBJ_PayPal_Buy_Now_Button();
	$plugin->run();

}
run_paypal_buy_now_button();
