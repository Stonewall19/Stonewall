<?php
/**
 * Plugin Name: Stonewall Marketplace
 * Plugin URI: http://example.com/
 * Description: A marketplace plugin for Stonewall.
 * Version: 1.0.0
 * Author: Stonewall19
 * Author URI: http://example.com/
 * License: GPL2
 */

// Enqueue assets
function stonewall_marketplace_enqueue_scripts() {
    wp_enqueue_style('stonewall-marketplace-style', plugins_url('assets/css/style.css', __FILE__));
    wp_enqueue_script('stonewall-marketplace-script', plugins_url('assets/js/script.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'stonewall_marketplace_enqueue_scripts');
