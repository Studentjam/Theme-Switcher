<?php
/**
 * Plugin Name: Light/Blue Theme Switcher
 * Description: Allows users to toggle between light and blue themes.
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue Scripts and Styles
function ld_theme_switcher_enqueue_scripts() {
    // Enqueue JavaScript
    wp_enqueue_script('ld-theme-switcher', plugin_dir_url(__FILE__) . 'theme-switcher.js', array('jquery'), '1.0', true);

    // Enqueue CSS
    wp_enqueue_style('ld-theme-switcher', plugin_dir_url(__FILE__) . 'theme-switcher.css');
}
add_action('wp_enqueue_scripts', 'ld_theme_switcher_enqueue_scripts');

// Add Toggle Button Using Shortcode
function ld_theme_switcher_button() {
    return '<button id="theme-toggle" class="theme-toggle">Switch Theme</button>';
}
add_shortcode('theme_switcher', 'ld_theme_switcher_button');
