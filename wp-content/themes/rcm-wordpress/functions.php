<?php

    // Theme Support
    function rcm_theme_setup() {
        add_theme_support( 'post-thumbnails' );

        // Nav Menus
        register_nav_menus( array(
            'primary' => __('Primary Menu')
        ) );

        // Post Formats
        add_theme_support( 'post-formats', array('gallery', 'image', 'video') );
    }

    add_action('after_setup_theme', 'rcm_theme_setup');

    // Widget locations
    function rcm_widgets_init($id) {
        register_sidebar(array(
            'id'            => 'categories_sidebar',
            'name'          => __('Categories Sidebar', 'rcm-wordpress'),
            'description'   => __('Project categories sidebar for navigating projects.'),
			// 'before_widget' => '<div id="%1$s" class="widget %2$s ProjectList_projectNav__rKb4W">',
			// 'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
        ));

        register_sidebar( array(
            'name'          => __('Carousel Sidebar', 'rcm-wordpress'),
            'id'            => 'carousel_sidebar',
            'description'   => __('Project photos carousel.'),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
        ) );
    }

    add_action('widgets_init', 'rcm_widgets_init');
