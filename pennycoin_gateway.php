<?php
/*
Plugin Name: Pennycoin Payment - WooCommerce
Plugin URI: http://pennykoin.com
Description: Extends WooCommerce by Adding the Pennycoin Payment
Version: 2.0
Author: SerHack
Author URI: http://monerointegrations.com

Modified November 2018 by EasyPool.pro (VN) to allow WooCommerce to accept pennykoin.com (PK) Cryptocurrency
Author URI: https://easypool.pro
*/

// This code isn't for Dark Net Markets, please report them to Authority!
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// Include our Gateway Class and register Payment Gateway with WooCommerce
add_action('plugins_loaded', 'pennycoin_init', 0);
function pennycoin_init()
{
    /* If the class doesn't exist (== WooCommerce isn't installed), return NULL */
    if (!class_exists('WC_Payment_Gateway')) return;


    /* If we made it this far, then include our Gateway Class */
    include_once('include/pennycoin_payments.php');
    require_once('library.php');

    // Lets add it too WooCommerce
    add_filter('woocommerce_payment_gateways', 'pennycoin_gateway');
    function pennycoin_gateway($methods)
    {
        $methods[] = 'Pennycoin_Gateway';
        return $methods;
    }
}

/*
 * Add custom link
 * The url will be http://yourworpress/wp-admin/admin.php?=wc-settings&tab=checkout
 */
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'pennycoin_payment');
function pennycoin_payment($links)
{
    $plugin_links = array(
        '<a href="' . admin_url('admin.php?page=wc-settings&tab=checkout') . '">' . __('Settings', 'pennycoin_payment') . '</a>',
    );

    return array_merge($plugin_links, $links);
}

add_action('admin_menu', 'pennycoin_create_menu');
function pennycoin_create_menu()
{
    add_menu_page(
        __('pennycoin', 'textdomain'),
        'Pennycoin',
        'manage_options',
        'admin.php?page=wc-settings&tab=checkout&section=pennycoin_gateway',
        '',
        plugins_url('pennycoin/assets/pennycoin.png'),
        56 // Position on menu, woocommerce has 55.5, products has 55.6

    );
}
