<?php
/**
 * Plugin Name: Property Plugin
 * Description: A headless WordPress plugin using React as frontend with custom Property post type
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: property-plugin
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Load the actual plugin from the Property_Plugin subfolder
require_once plugin_dir_path(__FILE__) . 'Property_Plugin/Property_Plugin.php';
