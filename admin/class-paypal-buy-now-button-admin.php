<?php

/**
 * @class       MBJ_PayPal_Buy_Now_Button_Admin
 * @version	1.0.0
 * @package	paypal-buy-now-button
 * @category	Class
 * @author      johnny manziel <phpwebcreators@gmail.com>
 */

class MBJ_PayPal_Buy_Now_Button_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->load_dependencies();
    }


    private function load_dependencies() {
        /**
         * The class responsible for defining all actions that occur in the Dashboard
         */
        
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/paypal-buy-now-button-general-setting.php';
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/paypal-buy-now-button-html-output.php';
        require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/paypal-buy-now-button-admin-display.php';

        

       
    }

}
