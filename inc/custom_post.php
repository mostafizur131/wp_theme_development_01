<?php

/**
 * Custom Post
 */
function custom_service()
{
    register_post_type(
        'service',
        array(
            'labels' => array(
                'name' => ('All Services'),
                'singular_name' => ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'New Item' => ('New Service'),
                'view_item' => ('View Service'),
                'not_found' => ('Sorry, We couldn\'t find the service you are looking for.')
            ),
            'menu_icon' => 'dashicons-welcome-write-blog',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'service'),
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_service');





/**
 * Custom Slider
 */
function custom_slider()
{
    register_post_type(
        'slider',
        array(
            'labels' => array(
                'name' => ('All Sliders'),
                'singular_name' => ('Slider'),
                'add_new' => ('Add New Slider'),
                'add_new_item' => ('Add New Slider'),
                'edit_item' => ('Edit Slider'),
                'New Item' => ('New Slider'),
                'view_item' => ('View Slider'),
                'not_found' => ('Sorry, We couldn\'t find the slider you are looking for.')
            ),
            'menu_icon' => 'dashicons-format-gallery',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 6,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'slider'),
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_slider');
