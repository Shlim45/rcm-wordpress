<?php
/*
Plugin Name: Project Carousel
Plugin URI: https://jhawranko.vercel.app
Description: A custom project carousel plugin for WordPress.
Version: 1.0
Author: Jonathan Hawranko
Author URI: https://jhawranko.vercel.app
*/

// Exit if accessed directly
if (!defined('ABSPATH')) { exit; }

// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/project-carousel-scripts.php');

// Load class
require_once(plugin_dir_path(__FILE__).'/includes/project-carousel-class.php');

// Register Widget
function register_project_carousel() {
    register_widget( 'Project_Carousel_Widget' );
}

// Hook in function
add_action('widgets_init', 'register_project_carousel');
