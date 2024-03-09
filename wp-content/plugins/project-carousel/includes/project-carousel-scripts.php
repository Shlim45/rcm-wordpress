<?php
// Add scripts
function pjc_add_scripts() {
    // Main CSS
    wp_enqueue_style('pjc-main-style', plugins_url(). '/project-carousel/css/style.css');
    // Main JS
    wp_enqueue_script( 'pjc-main-script', plugins_url(). '/project-carousel/js/main.js');
}

add_action('wp_enqueue_scripts', 'pjc_add_scripts');